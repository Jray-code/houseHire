<?php

use App\Http\Controllers\authContoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/renting', function () {
    return view('renting');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('login',[authContoller::class, 'index']);
Route::get('signin',[authContoller::class, 'signin']);
Route::post('create-user',[authContoller::class, 'store']);
Route::post('logout-user',[authContoller::class, 'logout']);
Route::post('login-user',[authContoller::class, 'login']);
