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

// Admin Routes - START --------------------------------->>>>>>>>
Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('all-users', function () {
    return view('all-users');
})->name("users");

Route::get('add-user', function () {
    return view('add-new-user');
})->name("add-user");


// Admin Routes - END --------------------------------->>>>>>>>>>