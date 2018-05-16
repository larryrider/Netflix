<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;

class DirectorController extends Controller
{
    public function index(){
        return view('admin.newDirector');
    }

    public function editDirector(){
        $directors = Director::all();
        return view('admin.editDirector', ['directors' => $directors]);
    }

    public function deleteDirector(){
        $directors = Director::all();
        return view('admin.deleteDirector', ['directors' => $directors]);
    }

    public function create(Request $request){
        Director::createDirector($request);
        return redirect()->action('DirectorController@index');
    }

    public function edit(Request $request){
        $d = Director::find($request->id);
        $d->name = $request->name;
        $d->save();
        return redirect()->action('DirectorController@editDirector');
    }

    public function delete(Request $request){
        $dir = Director::find($request->director);
        $dir->delete();
        return redirect()->action('DirectorController@deleteDirector');
    }
}

