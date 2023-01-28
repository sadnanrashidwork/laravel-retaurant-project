<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get("/from", function (Request $req) {
//     return " <h2> {$req->city} {$req->country} <h2/>";
// });

// Route::get("/get/{name}", function ($name) {
//     return response("<h1> The name is: {$name} <h1/>", 200);
// });

// Route::get("/blog/{id}", function ($id) {
//     return response("<h1> The id is: {$id} <h1/>", 200);
// })->where('id', '[0-9, a-z, -]+');