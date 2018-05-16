<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function create(Request $request){
        Review::createReview($request);
        return redirect()->back();
    }

    public function edit(Request $request){
        Review::editReview($request);
        return redirect()->back();
    }

    public function delete(Request $request){
        $rev = Review::find($request->id);
        $rev->delete();
        return redirect()->back();
    }
}
