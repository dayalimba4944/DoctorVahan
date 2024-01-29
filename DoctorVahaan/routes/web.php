<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UserController;


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

Route::post('/log-in', [AuthController::class, 'logIn']);
Route::get('/log-out', [AuthController::class, 'logOut']);
// Route::post('/sign-up', [UserController::class, 'store']);
Route::post('/sign-up', [UserController::class, 'store'])->name('signup');
Route::post('/get-quote', [AuthController::class, 'getQuote'])->name('getQuote');

// Route::post('/sign-up', 'Auth\UserController@store')->name('sign-up');



Route::get('/', function () {
    return view('welcome');
});
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
Route::get('/book-service', function () {
    return view('book-service');
});
Route::get('/change-password', function () {
    return view('change-password');
});
Route::get('/client', function () {
    return view('client');
});
Route::get('/Contact', function () {
    return view('Contact');
});
Route::get('/corporateenquiry', function () {
    return view('corporateenquiry');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/getQuate', function () {
    return view('getQuate');
});
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/privacyPolicy', function () {
    return view('privacyPolicy');
});
Route::get('/Profile', function () {
    return view('Profile');
});
Route::get('/ServiceArea', function () {
    return view('ServiceArea');
});
Route::get('/Services', function () {
    return view('Services');
});
Route::get('/SignUp', function () {
    return view('SignUp');
});
Route::get('/TermsCond', function () {
    return view('TermsCond');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});