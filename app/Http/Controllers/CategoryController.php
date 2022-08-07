<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.list',['categories'=> $categories]);
    }

    public function create(){
        return view('categories.new');
    }

    public function store(Request $request){

        // validate data
        $request->validate([
            'title' => 'required|unique:categories|max:200'
        ]);

        $category = new Category;

        $category->title = $request->title;

        $category->save();

        return redirect('/')->withSuccess('New Category Created!');
    }

    public function edit($id){
        $category = Category::where('id',$id)->first();
        return view('categories.edit',['category'=>$category]);
    }

    public function update(Request $request, $id){
        $category = Category::where('id',$id)->first();

        $category->title = $request->title;

        $category->save();

        return redirect('/');
    }

    public function destroy($id){
        $category = Category::whereId($id)->first();

        $category->delete();

        return redirect('/');
    }

}
