<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;

Route::group(['middleware'=>'auth'],function (){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/',[PageController::class,'home'])->name('home');
    ##edit profile
    Route::get('/edit-profile',[PageController::class,'editProfile'])->name('profile.edit');
    Route::post('/edit-profile',[PageController::class,'postEditProfile'])->name('profile.post.edit');
    ##view detail question
    Route::get('question-detail',[QuestionController::class,'questionDetail'])->name('question.detail');
});

Route::group(['middleware'=>'NotLogin'],function (){
//    login
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'postLogin'])->name('post.login');
//register
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'postRegister'])->name('post.register');
});



