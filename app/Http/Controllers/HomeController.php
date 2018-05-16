<?php

namespace App\Http\Controllers;
use App\Serie;
use App\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class HomeController extends Controller
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
    public function index()
    {
        $populares = $this->getSeries(8);

        $cat = Category::all();
        $catnum = Category::all()->count();
        $aux = array();
        foreach($cat as $c){
            array_push($aux, array($c,$this->getSeries($c->id)->toArray()));
        }

        return view('home',['numberCat' => $catnum,'series' => $aux,'populares' => $populares]);
    }

    public static function getSeries($id){
        $cat = DB::table('category_serie')->where('category_id',$id)->get();
        $aux = collect([]);
        foreach($cat as $c){
            $aux = $aux->concat(Serie::where('id',$c->serie_id)->get()); 
        }
        return $aux;
    }
}
