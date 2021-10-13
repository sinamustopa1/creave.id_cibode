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
    return view('page.landingpage');
});
Route::get('/aboutus', function () {
    return view('page.aboutus');
});
Route::get('/help', function () {
    return view('page.help');
});
Route::get('/galleru', function () {
    return view('page.gallery');
});
