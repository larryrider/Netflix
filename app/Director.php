<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    public static function createDirector($request) {
        $dir = new Director();
        if($request->has('name')){
            $dir->name = $request->name;
            $dir->save();
        }
    }
    
    public function series()
    {
        return $this->hasMany('App\Serie');
    }
}
