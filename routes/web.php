<?php

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
    $title = "Mysite";
    $content = "it mysite";
    $user="username";
    return view('welcome')->with([
        'title'=>$title,
        'content'=>$content,
        'user'=>$user
        ]);
})->name('home');

Route::get('/contact', function () {
    $title = "Contact";
    $content = "contact it";
    $user="username";
    return view('welcome')->with([
        'title'=>$title,
        'content'=>$content,
        'user'=>$user
        ]);
    return view('contact');
})->name('contact')->middleware('auth');

Route::get('/about', function () {
    $title = "about";
    $content = "it about";
    $user="username";
    return view('welcome')->with([
        'title'=>$title,
        'content'=>$content,
        'user'=>$user
        ]);
    return view('about');
})->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
