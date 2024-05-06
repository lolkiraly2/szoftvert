<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        return view('categories.index',[
            'categories' => Category::all()
        ]);
    }

    function show($id) {
        return view('categories.show',[
            'category' => Category::findOrFail($id)
        ]);
    }

    function create() {
        return view('categories.create');
    }

    function store() {
        request()->validate([
            'name' => 'required|max:5|unique:categories',
          ], [
            'required' => 'Nem lehet üres!',
            'max' => 'The Category\'s name could be maximum :max characters.',
            'unique' => 'The Category\'s name must be unique in categories table.',
          ]);
          
          
        Category::create(request()->all());
        return redirect("/categories");
    }

    function edit($id) {
        return view('categories.edit',[
            'category' => Category::findOrFail($id)
        ]);
    }

    function update($id) {
        request()->validate([
            'name' => 'required|max:5|unique:categories',
          ], [
            'required' => 'Nem lehet üres!',
            'max' => 'The Category\'s name could be maximum :max characters.',
            'unique' => 'The Category\'s name must be unique in categories table.',
          ]);
        $category = Category::find($id);
        $category->update(request()->all());
        return redirect("/categories");
    }

    function destroy($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect("/categories");
    }
    
}
