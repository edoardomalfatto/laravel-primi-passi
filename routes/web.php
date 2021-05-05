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
    $data = [
        "menu"=>[
            'Contacts' => '/contacts',
            'News' => 'https://laravel-news.com',
            'Blog' => '/blog',
            'Vapor' => '/vapor'
        ]

    ];
    return view('welcome', $data);
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/vapor', function () {
    return view('vapor');
});