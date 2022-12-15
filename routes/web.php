<?php

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
    $data = config('comics');
    $dcComicsLink = ["Characters", "Comics", "Movies", "TV", "Games", "Collectibles", "Videos", "fans", "News", "Shop"];

    return view('home', compact('data', 'dcComicsLink'));
});
