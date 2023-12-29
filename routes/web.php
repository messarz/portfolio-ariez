<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
 
})->name('contact');

Route::get('/contact2', [MainController::class, 'contact'])->name('contact2');

Route::get('/about', [MainController::class, 'about'])->name('about');


// Route::get('/contact2', 'App\Http\Controllers\MainController@contact')->name('contact2');