<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;

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
    return view('pages.welcome');
})->name('welcome');

Route::get('/contact', function () {
    return view('pages.contact');
 
})->name('contact');

Route::get('/contact2', [MainController::class, 'contact'])->name('contact2');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/blog', [PostController::class, 'index'])->name('blog');

//create new post
Route::post('/blog-post', [PostController::class, 'store'])->name('blog.create');

//delet post
Route::get('/blog-delete/{id}', [PostController::class, 'delete'])->name('blog.delete');


// Route::get('/contact2', 'App\Http\Controllers\MainController@contact')->name('contact2');

Route::get('/main', function () {
    return view('pages.index');
})->name('main');