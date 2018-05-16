<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function createCategory($request) {
        if($request->has('category')){
            $category = new Category();
            $category->category = $request->category;
            $category->save();
        }
    }

    public function series()
    {
        return $this->belongsToMany('App\Serie','category_serie');
    }
}
