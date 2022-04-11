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
    return view('home', [
        'who' => 'World',
        'nav_links' => [
            'teachers' => '/teachers'
        ]
    ]);
});

// sub-route from nav in homepage
Route::get('/teachers', function () {
    return view('teachers', [
        'teachers' => [
            'Alessio',
            'Gianluca',
            'Massimo'
        ]
        ]);
});