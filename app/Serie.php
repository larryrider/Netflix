<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Chapter;
use App\Actor;

use Illuminate\Support\Facades\DB;
class Serie extends Model
{

    public function create($request, $categories, $actors, $director) {
        $serie = new Serie();
        if($request->has('title') && $request->has('description') && $request->has('image') &&
        $request->has('image_preview') && $request->has('year') && $request->has('rating_age') &&
        !empty($director) && !empty($categories) && !empty($actors)){
            $serie->title = $request->title;
            $serie->description = $request->description;
            $serie->year = $request->year;
            $serie->seasons = 1;
            $serie->image = $request->image;
            $serie->image_preview = $request->image_preview;
            $serie->rating_age = $request->rating_age;
            $serie->director_id = $director[0];
            $serie->save();

            foreach($categories as $c){
                $serie->categories()->attach($c);
            }
    
            foreach($actors as $c){
                $serie->actors()->attach($c);
            }
        }
    }

    public function edit($request, $categories, $actors, $director){
        if($request->has('title') && $request->has('description') && $request->has('image') &&
        $request->has('image_preview') && $request->has('year') && $request->has('rating_age') &&
        !empty($director) && !empty($categories) && !empty($actors)){
            $this->title = $request->title;
            $this->description = $request->description;
            $this->image = $request->image;
            $this->image_preview = $request->image_preview;
            $this->year = $request->year;
            $this->rating_age = $request->rating_age;
            $this->director_id = $director[0];
            $this->save();

            $this->categories()->detach();
            foreach($categories as $c){
                $this->categories()->attach($c);
            }
            $this->actors()->detach();
            foreach($actors as $c){
                $this->actors()->attach($c);
            }
        }
    }

    public static function addSeason($request){
        if($request->has('serie')){
            $serie = Serie::where('id',$request->serie)->first();

            $serie->seasons = $serie->seasons+1;
            $serie->save();

            session()->put('serie',$serie);
            session()->put('cuenta',1);
        }
    }

    public function deleteSerie($request){
        if($request->has('serie')){
            $serie = Serie::where('id',$request->serie)->first();
            $serie->delete();
        }
    }

    public function chapters()
    {
        return $this->hasMany('App\Chapter');
    }

    public function directors()
    {
        return $this->belongsTo('App\Director');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category','category_serie');
    }

    public function actors() {
        return $this->belongsToMany('App\Actor');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
