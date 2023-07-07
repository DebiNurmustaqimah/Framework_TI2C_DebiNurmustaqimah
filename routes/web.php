<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/beranda', function(){
//     return view('beranda');
// });

Route::get('/beranda', function(){
    return view('beranda');
});

Route::get('/', function(){
    return view('auth.login');
});

Route::get('/auth.register', function(){
    return view('auth.register');
});

Route::get('/logout', function(){
    return view('auth.login');
});

Route::get('/search', function(){
    return view('search');
});

Route::get('/aboutme', function(){
    return view('aboutme');
});

Route::get('/portofolio', function(){
    return view('portofolio');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/client', function(){
    return view('client');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/chat', function(){
    return view('chat');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

