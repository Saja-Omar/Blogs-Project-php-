<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;

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
    Route::controller(ThemeController::class)->name('theme.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/category/{id}','category')->name('category');
        Route::get('/contact','contact')->name('contact');
        //Route::get('/singleRoute','singleRoute')->name('singleRoute');
        // Route::get('/login','login')->name('login');
        // Route::get('/register','register')->name('register');
        

    });

// SUBSCRIBER STORE ROUTE
Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('subscriber.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::resource('blogs', BlogController::class);
Route::get('/myblogs', [BlogController::class, 'myBlog'])->name('blogs.my-blog');

Route::post('/comment', [CommentController::class, 'store'])->name('comment');



require __DIR__.'/auth.php';
