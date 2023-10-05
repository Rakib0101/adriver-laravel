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
Route::get('/about', function () {
    return view('frontend.inner-pages.about');
});
Route::get('/contact', function () {
    return view('frontend.inner-pages.contact');
});
Route::get('/pricing-plan', function () {
    return view('frontend.inner-pages.pricing-plan');
});
Route::get('/blog', function () {
    return view('frontend.inner-pages.blog');
});
Route::get('/blog-details', function () {
    return view('frontend.inner-pages.blog-details');
});
Route::get('/error-page', function () {
    return view('frontend.inner-pages.error');
});
Route::get('/not-found', function () {
    return view('frontend.inner-pages.not-found');
});
Route::get('/coming-soon', function () {
    return view('frontend.inner-pages.coming-soon');
});
Route::get('/faqs', function () {
    return view('frontend.inner-pages.faqs');
});
