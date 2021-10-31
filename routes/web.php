<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\editController;
use App\Http\Controllers\packageController;
use App\Http\Controllers\eventController;
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

Route::get('/', [pageController::class, 'home'])->name('home');
//login Controller
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'loginConfirm'])->name('login');
//logout
Route::get('/logout', [loginController::class, 'logout'])->name('logout');
//registration
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register', [registerController::class, 'registration'])->name('register');

//editprofile
Route::get('/profile', [editController::class, 'editProfile'])->name('editprofile');
Route::post('/profile', [editController::class, 'updateData'])->name('editprofile');

//package
Route::get('/packages', [packageController::class, 'packagelist'])->name('packages');
Route::get('/packagedetails/{id}', [packageController::class, 'packdetails'])->name('packdetails');
Route::post('/createpackages', [packageController::class, 'createpackages'])->name('createpackages');
Route::get('/createpackages', [packageController::class, 'package'])->name('createpackages');
Route::get('/delete/{id}', [packageController::class, 'delete']);
Route::get('/editpackage/{id}', [packageController::class, 'editpackage'])->name('editpackage');
Route::post('/editpackage', [packageController::class, 'updatePackage'])->name('editpackage');

//event
Route::get('/events', [eventController::class, 'eventlist'])->name('events');


