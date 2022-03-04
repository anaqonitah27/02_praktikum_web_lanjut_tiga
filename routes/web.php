<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUs;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::prefix('category')->group(function(){
    Route::get('/eduGames',function(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Halaman Educational Game</a>';
    });
    Route::get('/kidsGames',function(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Halaman Kids Games</a>';
    });
    Route::get('/storyBooks',function(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">Halaman Kids Story Book</a>';
    });
    Route::get('/songs',function(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">Halaman Kids Song</a>';
    });
});

Route::get('/news/{slug}', function ($slug=''){
    return "Ini adalah halaman Berita $slug";
});

Route::prefix('/program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']);

Route::resource('/contact-us', ContactUs::class);
