<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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

Route::get("active_category",  [CategoriesController::class, 'activeCategory']);
Route::post("add_category",  [CategoriesController::class, 'addCategory'])->name('addCategory');



// Admin Routes - START --------------------------------->>>>>>>>
Route::get('/', function () {
    return view('index');
})->name("index");

// Route::get('categories', function () {
//     return view('categories-list');
// })->name("categories");

Route::get('all-users', function () {
    return view('all-users');
})->name("users");

Route::get('add-category', function () {
    return view('add-category');
})->name("add-category");

Route::get('add-user', function () {
    return view('add-new-user');
})->name("add-user");



Route::get('login', function () {
    return view('login');
})->name("login");


// Admin Routes - END --------------------------------->>>>>>>>>>
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
