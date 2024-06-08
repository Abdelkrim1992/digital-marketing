<?php

use Illuminate\Support\Facades\Route;

/****** backend *****/

use App\Http\Controllers\backend\ClientController;
use App\Http\Controllers\backend\ConfirmedClientController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\ServiceManagementController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\backend\UserController;


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
Route::get('/service-details/{id}',[ServiceDetailController::class,'index'])->name('frontend.service_details');

/****** frontend contact form *****/

Route::post('/reservation', [ClientController::class, 'store'])->name('reservation');

/****** backend *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/dashboard',[BackendController::class,'index'])->name('backend.index');

});
   /****** setting *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/admin/setting',[SettingController::class,'index'])->name('setting.index');
Route::POST('/admin/setting/update',[SettingController::class,'update'])->name('setting.update');

});

   /****** service *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/admin/services',[ServiceManagementController::class,'index'])->name('service.index');
Route::get('/admin/service/create',[ServiceManagementController::class,'create'])->name('service.create');
Route::POST('/admin/service/index',[ServiceManagementController::class,'store'])->name('service.store');
Route::get('/admin/service/edit/{id}',[ServiceManagementController::class,'edit'])->name('service.edit');
Route::POST('/admin/service/update/{id}',[ServiceManagementController::class,'update'])->name('service.update');
Route::get('/admin/service/{id}',[ServiceManagementController::class,'delete'])->name('service.delete');

});

   /****** contact form clients *****/
Route::middleware(['auth'])->group(function () {

Route::get('/admin/request/clients', [ClientController::class, 'index'])->name('client.index');
Route::get('admin/request/client/{id}/accept', [ClientController::class, 'acceptClient'])->name('client.accept');
   
});

   /****** confirmed clients *****/
   
Route::prefix('admin')->middleware('auth')->group(function () {
   Route::resource('confirmed-clients', ConfirmedClientController::class);
});

   /****** team *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/admin/team',[TeamController::class,'index'])->name('team.index');
Route::get('/admin/team/create',[TeamController::class,'create'])->name('team.create');
Route::POST('/admin/team',[TeamController::class,'store'])->name('team.store');
Route::get('/admin/team/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
Route::POST('/admin/team/update/{id}',[TeamController::class,'update'])->name('team.update');
Route::get('/admin/team/{id}',[TeamController::class,'delete'])->name('team.delete');

});

    /****** testimonial *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/admin/testimonials',[TestimonialController::class,'index'])->name('testimonial.index');
Route::get('/admin/testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
Route::POST('/admin/testimonials',[TestimonialController::class,'store'])->name('testimonial.store');
Route::get('/admin/testimonial/edit/{id}',[TestimonialController::class,'edit'])->name('testimonial.edit');
Route::POST('/admin/testimonial/update/{id}',[TestimonialController::class,'update'])->name('testimonial.update');
Route::get('/admin/testimonial/{id}',[TestimonialController::class,'delete'])->name('testimonial.delete');

});

/****** users *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/admin/users',[UserController::class,'index'])->name('user.index');
Route::POST('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/admin/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::POST('/users/update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/users/delete',[UserController::class,'delete'])->name('user.delete');
Route::post('/delete-users', [UserController::class, 'deleteUsers'])->name('user.deleteUsers');
});

/****** for dashboard *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/admin/dashboard',[HomeController::class,'index'])->name('dashboard');
Route::get('/home',[HomeController::class,'index'])->name('admin.dashboard');

});





