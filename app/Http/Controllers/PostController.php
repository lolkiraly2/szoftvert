<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function show($title)
    {
        $tomb = ["Lajos", "Bela", "Tibi"];
        return view('post', [
            "title" => $tomb[$title] ?? abort(404) ,
            "hossz" => Post::getLength($tomb[$title])
        ]);
    }
}
