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
        Category::create(request()->all());
        return redirect("/categories");
    }

    function edit($id) {
        return view('categories.edit',[
            'category' => Category::findOrFail($id)
        ]);
    }

    function update($id) {
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
