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
    return view('index');
})->name('home');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/terms-and-conditions', function () {
    return view('terms');
})->name('terms');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/privacy-policy', function () {
    return view('policy');
})->name('policy');

Route::get('/refund-policy', function () {
    return view('refund');
})->name('refund');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/elderly-and-disabled-people', function () {
    return view('eadp');
})->name('eadp');