<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;

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

Route::get('/', [HomePageController::class, 'index'])->name('index');

/*Login Users*/
Route::get('/home', [LoginController::class, 'dashboard'])->name('home')->middleware(['auth']);
Route::get('/sign-in', [LoginController::class, 'signIn'])->name('sign-in');
Route::post('/sign-in', [LoginController::class, 'login'])->name('login');
Route::get('/signout', [LoginController::class, 'signout'])->name('signout');

/*Register Users*/
Route::get('/sign-up', [RegisterController::class, 'register'])->name('sign-up');
Route::post('/sign-up/register', [RegisterController::class, 'store'])->name('store');

/*Crud Users*/
Route::get('/user/create', [UserController::class, 'create'])->name('create-user')->middleware(['auth']);
Route::post('/user/create', [UserController::class, 'register_user'])->name('register-user')->middleware(['auth']);
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edit-user')->middleware(['auth']);
Route::put('/user/{id}', [UserController::class, 'update'])->name('update-user')->middleware(['auth']);
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('show-user')->middleware(['auth']);
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('destroy-user')->middleware(['auth']);

/*Crud Documents*/
Route::get('/documents/index', [DocumentController::class, 'index'])->name('index-document')->middleware(['auth']);
Route::get('/documents/create', [DocumentController::class, 'create'])->name('create-document')->middleware(['auth']);
Route::post('/documents/create', [DocumentController::class, 'register_document'])->name('register-document')->middleware(['auth']);
