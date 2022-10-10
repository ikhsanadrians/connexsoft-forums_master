<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home',[App\Http\Controllers\HomeController::class,'create'])->name('homepost');
Route::post('/',[App\Http\Controllers\HomeController::class,'create'])->name('homepost');
Route::get('/question/{id}/details',[App\Http\Controllers\QuestionController::class,'showdetailsquestion'])->name('detailsquestion');
Route::post('/question/{id}/details/addcomments',[App\Http\Controllers\CommentController::class,'create'])->name('createcomments');
Route::post('/question/{id}/details/addanswers',[App\Http\Controllers\AnswerController::class,'create'])->name('createanswers');
Route::get('user/{user:slug}',[App\Http\Controllers\UserController::class,'index'])->name('profileindex');
Route::post('user/{user:slug}',[App\Http\Controllers\UserController::class,'changeProfilePicture'])->name('profilepost');