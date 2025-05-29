<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('home');
});

Route::get('/profiles',[ProfileController::class,'index'])->name('profiles.index');
Route::get('/new', function () { return view('profile.add-profile');})->name('new');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/login', function () { return view('Login.login');})->name('Login');

Route::get('/settings', function () {return view('settings');})->name('settings');
Route::get('/profile/{id}',[ProfileController::class,'show'])
->where('id','\d+')->name('profile.show');



Route::post('/create',[ProfileController::class,'create'])->name('create');
Route::post('/create',[ProfileController::class,'create'])->name('create');
Route::post('/Signin',[LoginController::class,'Signin'])->name('Signin');


