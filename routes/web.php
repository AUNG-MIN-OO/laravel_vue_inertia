<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;

Route::group(['middleware'=>'auth'],function (){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/',[QuestionController::class,'home'])->name('home');
    ##edit profile
    Route::get('/profile/edit',[PageController::class,'editProfile'])->name('profile.edit');
    Route::post('/edit-profile',[PageController::class,'postEditProfile'])->name('profile.post.edit');
    Route::get('profile/question/user',[QuestionController::class,'userQuestion'])->name('question.user');
    Route::get('profile/question/saved',[QuestionController::class,'showSavedQuestion'])->name('question.save.show');
    Route::get('question/save/remove/{id}',[QuestionController::class,'removeSavedQuestion'])->name('save.question.remove');

    ##view detail question
    Route::get('question/detail/{slug}',[QuestionController::class,'questionDetail'])->name('question.detail');
    Route::get('question/like/{id}',[QuestionController::class,'like'])->name('question.like');

    ##create question
    Route::get('question/create',[QuestionController::class,'showQuestion'])->name('question.show');
    Route::post('question/create',[QuestionController::class,'storeQuestion'])->name('question.store');
    Route::get('question/delete/{id}',[QuestionController::class,'deleteQuestion'])->name('question.delete');
    Route::post('question/set/fix',[QuestionController::class,'setFixed'])->name('question.setfix');
    Route::get('question/save/{id}',[QuestionController::class,'saveQuestion'])->name('question.save');

    ##comment
    Route::post('question/comment/create',[QuestionController::class,'createComment'])->name('comment.create');

});

Route::group(['middleware'=>'NotLogin'],function (){
//    login
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'postLogin'])->name('post.login');
//register
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'postRegister'])->name('post.register');
});



