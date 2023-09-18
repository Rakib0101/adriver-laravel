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
    return view('welcome');
});
Route::get('/home', function () {
    return view('frontend.index');
});
Route::get('/browse-listing', function () {
    return view('frontend.browse-listing');
});

Route::get('/map-browse-listing', function () {
    return view('frontend.map-browse-listing');
});
Route::get('/ad-details', function () {
    return view('frontend.ad-details');
});
Route::get('/user-profile', function () {
    return view('frontend.user-profile');
});
Route::get('/user-dashboard', function () {
    return view('frontend.user-dashboard');
});
