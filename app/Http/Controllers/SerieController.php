<?php

namespace App\Http\Controllers;
use App\Serie;
use App\Chapter;
use App\Category;
use App\Director;
use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class SerieController extends Controller
{
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $serie = Serie::where('id',$id)->get()[0];
        $categories = $this->getCategories($id);
        $director = Director::where('id',$serie->director_id)->first();
        $actors = $this->getActors($id);
        return view('serie.serie',['serie' => $serie, 'categories' => $categories, 'director' => $director, 'actors' => $actors]);
    }

    public function details($id)
    {
        $serie = Serie::where('id',$id)->get()[0];
        $categories = $this->getCategories($id);
        $director = Director::where('id',$serie->director_id)->first();
        $reviews = $serie->reviews()->get(); 
        $actors = $this->getActors($id);
        return view('serie.detalles',['serie' => $serie, 'categories' => $categories, 'director' => $director, 'actors' => $actors, 'reviews' => $reviews]);
    }

    public function similar($id)
    {
        $serie = Serie::where('id',$id)->get()[0];
        $categories = $this->getCategories($id);

        $aux = collect([]);
        foreach($categories as $c){
            $aux = $aux->concat($this->getSeries($c->id)); 
        }
        return view('serie.similares',['serie' => $serie, 'categories' => $categories, 'similares' => $aux]);
    }

    public function chapters($id, $temp)
    {
        $serie = Serie::where('id',$id)->get()[0];
        $categories = $this->getCategories($id);
        $director = Director::where('id',$serie->director_id)->first();
        $chapters = Chapter::where('serie_id',$id)->where('season',$temp)->get();
        return view('serie.episodios',['serie' => $serie, 'chapters' => $chapters, 'temp'=>$temp]);
    }

    public function series()
    {

        $cat = Category::all();
        $catnum = Category::all()->count();
        $aux = array();
        foreach($cat as $c){
            array_push($aux, array($c,$this->getSeries($c->id)->toArray()));
        }
        return view('series',['numberCat' => $catnum,'series' => $aux, 'categories' => $cat]);
    }

    public function browseCategory($id)
    {
        $cat = Category::find($id);
        $series = $this->getSeries($id);
        return view('browse',['series' => $series,'title' => $cat->category]);
    }

    public function browseDirector($id)
    {
        $dir = Director::find($id);
        $series = Serie::where('director_id',$dir->id)->get();
        return view('browse',['series' => $series,'title' => $dir->name]);
    }

    public function browseActor($id)
    {
        $act = Actor::find($id);
        $series = $this->getSeriesActor($id);
        return view('browse',['series' => $series,'title' => $act->name]);
    }

    public function newSerie()
    {
        $cat = Category::all();
        $actors = Actor::all();
        $directors = Director::all();
        return view('admin.newSerie',['categories' => $cat, 'actors' => $actors, 'directors' => $directors]);
    }

    public function editSerie()
    {
        $series = Serie::all();
        $selectedCategories = array();
        foreach($series as $s){
            array_push($selectedCategories, array($s->id, $this->getCategories($s->id)->toJson()));
        }
        $cat = Category::all();
        $selectedActors = array();
        foreach($series as $s){
            array_push($selectedActors, array($s->id, $this->getActors($s->id)->toJson()));
        }
        $actors = Actor::all();
        $directors = Director::all();
        $selectedDirectors = array();
        foreach($series as $s){
            array_push($selectedDirectors, array($s->id, $this->getDirector($s->director_id)->toJson()));
        }
        return view('admin.editSerie',['series' => $series,'categories' => $cat, 'actors' => $actors, 'directors' => $directors,
            'selectedCategories' => json_encode($selectedCategories), 'selectedActors' => json_encode($selectedActors),
            'selectedDirectors' => json_encode($selectedDirectors)]);
    }
    

    public function newSeason()
    {
        $series = Serie::all();
        return view('admin.newSeason',['series' => $series]);
    }

    public function deleteSerie()
    {
        $series = Serie::all();
        return view('admin.deleteSerie',['series' => $series]);
    }

    public function deleteSeason()
    {
        $series = Serie::all();
        return view('admin.deleteSeason',['series' => $series]);
    }

    

    public function create(Request $request){
        $serie = new Serie();
        $categories = Input::get('categories');
        $actors = Input::get('actors');
        $director = Input::get('directors');
        $serie->create($request, $categories, $actors, $director);

        $s = Serie::where('title',$request->title)->first();
        $request->session()->put('serie',$s);
        $request->session()->put('chapters',$request->chapters);
        $request->session()->put('cuenta',1);
        return redirect()->action('ChapterController@index');
    }

    public function edit(Request $request){
        $serie = Serie::find($request->idSerie);
        $categories = Input::get('categories');
        $actors = Input::get('actors');
        $director = Input::get('directors');
        $serie->edit($request, $categories, $actors, $director);

        return redirect()->action('SerieController@editSerie');
    }

    public function delete(Request $request){

        $serie = Serie::where('id',$request->serie)->first();
        $serie->deleteSerie($request);
        return redirect()->action('SerieController@deleteSerie');
    }
    
    public function deleteLastSeason(Request $request){
        $serie = Serie::where('id',$request->serie)->first();
        $lastSeason = $serie->seasons;
        $serie->seasons = $serie->seasons - 1;
        $serie->save();
        chapter::deleteChapters($serie->id,$lastSeason);
        return redirect()->action('SerieController@deleteSeason');
    }

    public function showEditChapter()
    {
        $series = Serie::all();
        $chapters = Chapter::all();
        return view('admin.editChapter',['series' => $series,'chapters' => $chapters]);
    }

    public function editChapter(Request $request){
        $chapter = Chapter::find($request->chapter);
        $chapter->title = $request->titleChapter;
        $chapter->description = $request->descChapter;
        $chapter->save();

        return redirect()->action('SerieController@showEditChapter');
    }
    

    public function addSeason(Request $request){
        Serie::addSeason($request);

        session()->put('chapters',$request->chapters);
        return redirect()->action('ChapterController@index');
    }

    public static function getCategories($id){
        $cat = DB::table('category_serie')->where('serie_id',$id)->get();
        $aux = collect([]);
        foreach($cat as $c){
            $aux = $aux->concat(Category::where('id',$c->category_id)->get()); 
        }
        return $aux;
    }

    public static function getActors($id){
        $cat = DB::table('actor_serie')->where('serie_id',$id)->get();
        $aux = collect([]);
        foreach($cat as $c){
            $aux = $aux->concat(Actor::where('id',$c->actor_id)->get()); 
        }
        return $aux;
    }

    public static function getSeries($id){
        $cat = DB::table('category_serie')->where('category_id',$id)->get();
        $aux = collect([]);
        foreach($cat as $c){
            $aux = $aux->concat(Serie::where('id',$c->serie_id)->get()); 
        }
        return $aux;
    }

    public static function getSeriesActor($id){
        $cat = DB::table('actor_serie')->where('actor_id',$id)->get();
        $aux = collect([]);
        foreach($cat as $c){
            $aux = $aux->concat(Serie::where('id',$c->serie_id)->get()); 
        }
        return $aux;
    }

    public static function getDirector($id){
        $cat = Director::where('id',$id)->get();
        $aux = collect([]);
        $aux = $aux->concat($cat); 
        return $aux;
    }

}
