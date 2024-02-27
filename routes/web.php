<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asdf', function () {
    $nev = "Gergő";
    return view("nezet",[
        "name" => '<script> alert("Meg lettél támadva!") </script>'
    ]);
});

Route::get('/request', function () {
    return view('request',[
        'title' => request("title")
    ]);
});

Route::get('/tombki', function () {
    $tomb = ["Lajos", "Béla", "Tibi"];
    return view('tombosNezet',[
        "arr" => $tomb
    ]);
});

// Route::get('/post/{cim}', function ($cim) {
//     $tomb = ["Lajos", "Béla", "Tibi"];
//     return view('post', [
//         "title" => $tomb[$cim] ?? abort(404) //Ha nem létezik a bal oldali dologm akkor csinálj valamit"Nincs ilyen bejegyzés!"
//     ]);
// });

Route::get('/post/{cim}', [
    PostController ::class, 
    "show"
]);

Route::get('pages/projects', function () {
    return view('projects');
});