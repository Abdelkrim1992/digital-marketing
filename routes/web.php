<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\PageController;


use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServiceController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;




/****** frontend *****/

Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('/about-us',[AboutController::class,'index'])->name('frontend.about');
Route::get('/contact-us',[ContactController::class,'index'])->name('frontend.contact');
Route::get('/services',[ServiceController::class,'index'])->name('frontend.services');


/****** backend *****/

   /****** setting *****/
Route::get('/dashboard',[BackendController::class,'index'])->name('backend.index');
Route::get('/setting',[SettingController::class,'index'])->name('setting.index');
Route::POST('/setting/update',[SettingController::class,'update'])->name('setting.update');

    /****** slider *****/

Route::get('/slider',[SliderController::class,'index'])->name('slider.index');
Route::get('/slider/create',[SliderController::class,'create'])->name('slider.create');
Route::POST('/slider/index',[SliderController::class,'store'])->name('slider.store');
Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
Route::POST('/slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
Route::get('/slider/{id}',[SliderController::class,'delete'])->name('slider.delete');

    /****** page *****/

Route::get('/page',[PageController::class,'index'])->name('page.index');
Route::get('/page/create',[PageController::class,'create'])->name('page.create');
Route::POST('/page/index',[PageController::class,'store'])->name('page.store');
Route::get('/page/edit/{id}',[PageController::class,'edit'])->name('page.edit');
Route::POST('/page/update/{id}',[PageController::class,'update'])->name('page.update');
Route::get('/page/{id}',[PageController::class,'delete'])->name('page.delete');

/****** for user *****/

Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');

/****** for admin *****/

Route::get('/home',[HomeController::class,'index'])->name('admin.dashboard');

/****** for logout *****/

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');


