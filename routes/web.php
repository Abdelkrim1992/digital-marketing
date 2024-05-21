<?php

use Illuminate\Support\Facades\Route;

/****** backend *****/

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\TestimonialController;


/****** frontend *****/

use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\ServiceDetailController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;




/****** frontend *****/

Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('/about-us',[AboutUsController::class,'index'])->name('frontend.about_us');
Route::get('/contact-us',[ContactUsController::class,'index'])->name('frontend.contact_us');
Route::get('/services',[ServiceController::class,'index'])->name('frontend.services');
Route::get('/service/details',[ServiceDetailController::class,'index'])->name('frontend.service_details');


/****** backend *****/

Route::get('/dashboard',[BackendController::class,'index'])->name('backend.index');

   /****** setting *****/

Route::get('/setting',[SettingController::class,'index'])->name('setting.index');
Route::POST('/setting/update',[SettingController::class,'update'])->name('setting.update');

   /****** team *****/

Route::get('/team/index',[TeamController::class,'index'])->name('team.index');
Route::get('/team/create',[TeamController::class,'create'])->name('team.create');
Route::POST('/team/index',[TeamController::class,'store'])->name('team.store');
Route::get('/team/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
Route::POST('/team/update/{id}',[TeamController::class,'update'])->name('team.update');
Route::get('/team/{id}',[TeamController::class,'delete'])->name('team.delete');

    /****** testimonial *****/

Route::get('/testimonial/index',[TestimonialController::class,'index'])->name('testimonial.index');
Route::get('/testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
Route::POST('/testimonial/index',[TestimonialController::class,'store'])->name('testimonial.store');
Route::get('/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('testimonial.edit');
Route::POST('/testimonial/update/{id}',[TestimonialController::class,'update'])->name('testimonial.update');
Route::get('/testimonial/{id}',[TestimonialController::class,'delete'])->name('testimonial.delete');


/****** for user *****/

Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');

/****** for admin *****/

Route::get('/home',[HomeController::class,'index'])->name('admin.dashboard');

/****** for logout *****/

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');


