<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddStudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'post']);
Route::get('/addStudent',[AddStudentController::class,'addStudent']);
Route::post('/addStudent',[AddStudentController::class,'saveStudentInfo'])->name('studentInfo');
