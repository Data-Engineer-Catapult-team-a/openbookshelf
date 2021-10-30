<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BooksController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\ReviewController;

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
Route::get('user/search', '\App\Http\Controllers\UserController@search')->name("user.search");
Route::get('user/index', '\App\Http\Controllers\UserController@index')->name("user.index");
Route::get('user/personal_page/{user_id}', '\App\Http\Controllers\ReviewController@go_personal_page')->name("review.go_personal_page");
Route::get('user/personal_review/{id}', '\App\Http\Controllers\ReviewController@go_personal_review')->name("review.go_personal_review");





Route::resource('Books', BooksController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
