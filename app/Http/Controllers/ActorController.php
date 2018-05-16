<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
 
    public function index()
    {
        return view('admin.newActor');
    }

    public function editActor()
    {
        $actor = Actor::all();
        return view('admin.editActor', ['actors' => $actor]);
    }

    public function deleteActor()
    {
        $actor = Actor::all();
        return view('admin.deleteActor', ['actors' => $actor]);
    }

    public function create(Request $request)
    {
        Actor::createActor($request);
        return redirect()->action('ActorController@index');
    }

    public function edit(Request $request)
    {
        $d = Actor::find($request->id);
        $d->name = $request->name;
        $d->save();
        return redirect()->action('ActorController@editActor');
    }

    public function delete(Request $request){
        $dir = Actor::find($request->actor);
        $dir->delete();
        return redirect()->action('ActorController@deleteActor');
    }
}
