<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tags.index', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create', [
            'posts' => Post::orderBy('slug')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $tag = Tag::create([
        //     'name' => request('name'),
            
        // ]);
        // $tag->posts()->attach(request('posts'));

         Tag::create([
            'name' => request('name'),
            
        ])->posts()->attach(request('posts'));

        return redirect(route('tags.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('tags.show',[
            'tag' => $tag
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        $posts = Post::orderBy('slug')->get();
        return view('tags.edit', compact('tag', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $tag->posts()->sync(request('posts'));
        return redirect(route('tags.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect(route('tags.index'));
    }
}
