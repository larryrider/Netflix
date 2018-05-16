<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Review extends Model
{
    //

    public static function createReview($request){
        $id = Auth::id();
        $r = new Review();
        if($request->has('reviewText') && $request->has('stars') && $request->has('serie')){
            $r->description = $request->reviewText;
            $r->stars = $request->stars;
            $r->user_id = $id;
            $r->serie_id = $request->serie;
            $r->save();
        }
    }

    public static function editReview($request){
        if($request->has('reviewText') && $request->has('stars')){
            $r = Review::where('id',$request->reviewId)->first();
            $r->description = $request->reviewText;
            $r->stars = $request->stars;
            $r->save();
        }
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function series()
    {
        return $this->belongsTo('App\Serie');
    }
}
