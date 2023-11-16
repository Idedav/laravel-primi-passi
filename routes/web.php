<?php

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
    return view('home');
});

Route::get('/numbers', function () {
    $limit = 50;
    return view('numbers',compact('limit'));
});

Route::get('/user', function () {
    $name = 'Levi';
    $lastname = 'Ackerman';
    return view('user', compact('name', 'lastname'));
});
