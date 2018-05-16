<?php

namespace App\Http\Controllers;
use App\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    //
    public function index()
    {
        $serie = session()->get('serie');
        $chapters = session()->get('chapters');
        $c = session()->get('cuenta');
        if($c>$chapters){
            return redirect()->action('AdminController@index');
        }else{
            return view('admin.newChapter',['serie'=>$serie, 'chapters'=>$chapters]);
        }
        
    }

    public function create(Request $request) {
        $c = session()->get('cuenta');
        $number = session()->get('chapters');
        $serie = session()->get('serie');
        
        Chapter::create($serie,$serie->seasons,$request->title,$request->description);
        
        $request->session()->put('cuenta',$c+1);
    
        return redirect()->action('ChapterController@index');
    }
}