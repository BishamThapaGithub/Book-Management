<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return view('demo');
});

Route::get('/welcome', function () {
    return view('demo2');
});

Route::get('/go', function () {
    return view('signin');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/signin',function(){
return view('Dashboard');
});

Route::post('/register',[userController::class,'newFun'])->name('register');
Route::post('/go',[LoginController::class,'login'])->name('login');

