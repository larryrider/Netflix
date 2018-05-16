<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.newCategory');
    }
    
    public function editCategory()
    {
        $categories = Category::all();
        return view('admin.editCategory', ['categories' => $categories]);
    }

    public function deleteCategory()
    {
        $categories = Category::all();
        return view('admin.deleteCategory', ['categories' => $categories]);
    }

    public function create(Request $request)
    {
        Category::createCategory($request);
        return redirect()->action('CategoryController@index');
    }

    public function edit(Request $request)
    {
        $d = Category::find($request->id);
        $d->category = $request->category;
        $d->save();
        return redirect()->action('CategoryController@editCategory');
    }

    public function delete(Request $request){
        $dir = Category::find($request->category);
        $dir->delete();
        return redirect()->action('CategoryController@deleteCategory');
    }
}
