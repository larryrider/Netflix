<?php

namespace App;
use App\Serie;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

    public static function createActor($request) {
        if($request->has('name')){
            $actor = new Actor();
            $actor->name = $request->name;
            $actor->save();
        }
    }

    public function serie() {
        return $this->belongsToMany('App\Serie');
    }
       
}
