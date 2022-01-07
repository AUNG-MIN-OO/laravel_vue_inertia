<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

Route::group(['middleware'=>'auth'],function (){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/',[PageController::class,'home'])->name('home');
});

Route::group(['middleware'=>'NotLogin'],function (){
//    login
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'postLogin'])->name('post.login');
//register
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'postRegister'])->name('post.register');
});



