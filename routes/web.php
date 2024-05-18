<?php

use Illuminate\Support\Facades\Route;

/****** backend *****/

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\SettingController;

use App\Http\Controllers\backend\sections\SliderController;
use App\Http\Controllers\backend\sections\AboutController;
use App\Http\Controllers\backend\sections\ContactController;
use App\Http\Controllers\backend\sections\ProcessController;
use App\Http\Controllers\backend\sections\ServiceOfferController;
use App\Http\Controllers\backend\sections\TalkController;
use App\Http\Controllers\backend\sections\TeamController;
use App\Http\Controllers\backend\sections\TestimonailController;


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

    /****** slider *****/

Route::get('/sections/slider',[SliderController::class,'index'])->name('slider.index');
Route::get('/sections/slider/create',[SliderController::class,'create'])->name('slider.create');
Route::POST('/sections/slider/index',[SliderController::class,'store'])->name('slider.store');
Route::get('/sections/sections/slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
Route::POST('/sections/slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
Route::get('/sections/slider/{id}',[SliderController::class,'delete'])->name('slider.delete');

    /****** about *****/

Route::get('/sections/about',[AboutController::class,'index'])->name('about.index');
Route::POST('/sections/about/update',[AboutController::class,'update'])->name('about.update');

    /****** contact *****/

Route::get('/sections/contact',[ContactController::class,'index'])->name('contact.index');
Route::POST('/sections/contact/update',[ContactController::class,'update'])->name('contact.update');

    /****** process *****/

Route::get('/sections/process',[ProcessController::class,'index'])->name('process.index');
Route::POST('/sections/process/update',[ProcessController::class,'update'])->name('process.update');

    /****** service offer *****/



    /****** talk *****/

Route::get('/sections/talk',[TalkController::class,'index'])->name('talk.index');
Route::POST('/sections/talk/update',[TalkController::class,'update'])->name('talk.update');

    /****** team *****/

Route::get('/sections/team',[TeamController::class,'index'])->name('team.index');
Route::get('/sections/team/create',[TeamController::class,'create'])->name('team.create');
Route::POST('/sections/team/index',[TeamController::class,'store'])->name('team.store');
Route::get('/sections/team/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
Route::POST('/sections/team/update/{id}',[TeamController::class,'update'])->name('team.update');
Route::get('/sections/team/{id}',[TeamController::class,'delete'])->name('team.delete');

    /****** testimonial *****/

Route::get('/sections/testimonial',[TestimonailController::class,'index'])->name('testimonial.index');
Route::get('/sections/testimonial/create',[TestimonailController::class,'create'])->name('testimonial.create');
Route::POST('/sections/testimonial/index',[TestimonailController::class,'store'])->name('testimonial.store');
Route::get('/sections/testimonial/edit/{id}',[TestimonailController::class,'edit'])->name('testimonial.edit');
Route::POST('/sections/testimonial/update/{id}',[TestimonailController::class,'update'])->name('testimonial.update');
Route::get('/sections/testimonial/{id}',[TestimonailController::class,'delete'])->name('testimonial.delete');


/****** for user *****/

Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');

/****** for admin *****/

Route::get('/home',[HomeController::class,'index'])->name('admin.dashboard');

/****** for logout *****/

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');


