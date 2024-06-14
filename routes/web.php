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
use App\Http\Controllers\backend\ProjectController;


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

Route::get('/setting',[SettingController::class,'index'])->name('setting.index');
Route::POST('/setting/update',[SettingController::class,'update'])->name('setting.update');

});

   /****** service *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/services/index',[ServiceManagementController::class,'index'])->name('service.index');
Route::get('/services/create',[ServiceManagementController::class,'create'])->name('service.create');
Route::POST('/services/store/index',[ServiceManagementController::class,'store'])->name('service.store');
Route::get('/services/edit/{id}',[ServiceManagementController::class,'edit'])->name('service.edit');
Route::POST('/services/update/{id}',[ServiceManagementController::class,'update'])->name('service.update');
Route::get('/services/delete/{id}',[ServiceManagementController::class,'delete'])->name('service.delete');

});

   /****** contact form clients *****/
Route::middleware(['auth'])->group(function () {

Route::get('/request/clients', [ClientController::class, 'index'])->name('client.index');
Route::get('request/client/{id}/accept', [ClientController::class, 'acceptClient'])->name('client.accept');
   
});

   /****** confirmed clients *****/
   
Route::middleware('auth')->group(function () {
   Route::get('/confirmed-clients',[ConfirmedClientController::class,'index'])->name('confirmed-clients.index');
   Route::POST('/confirmed-clients',[ConfirmedClientController::class,'store'])->name('confirmed-clients.store');
   Route::get('/confirmed-clients/edit/{id}',[ConfirmedClientController::class,'edit'])->name('confirmed-clients.edit');
   Route::put('/confirmed-clients/update/{id}',[ConfirmedClientController::class,'update'])->name('confirmed-clients.update');
   Route::get('confirmed-clients/{id}', [ConfirmedClientController::class,'destroy'])->name('confirmed-clients.destroy');
   Route::post('/confirmed-clients/delete-multiple', [ConfirmedClientController::class, 'deleteMultiple'])->name('confirmed-clients.deleteMultiple');

});

   /****** team *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/team',[TeamController::class,'index'])->name('team.index');
Route::POST('/team',[TeamController::class,'store'])->name('team.store');
Route::get('/team/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
Route::POST('/team/update/{id}',[TeamController::class,'update'])->name('team.update');
Route::delete('team/{id}', [TeamController::class,'delete'])->name('team.delete');
Route::post('/team/delete-multiple', [TeamController::class, 'deleteMultiple'])->name('team.delete-multiple');
});

    /****** testimonial *****/
Route::middleware(['auth', 'verified'])->group(function () {

   Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
   Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonial.store');
   Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
   Route::post('/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
   Route::delete('/testimonial', [TestimonialController::class, 'delete'])->name('testimonial.delete');
   Route::post('/testimonial/delete-multiple', [TestimonialController::class, 'deleteMultiple'])->name('testimonial.delete.multiple');

});

/****** users *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/users',[UserController::class,'index'])->name('user.index');
Route::POST('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::POST('/users/update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/users/delete',[UserController::class,'delete'])->name('user.delete');
Route::POST('/delete-users', [UserController::class, 'deleteUsers'])->name('user.deleteUsers');

});

/****** projects *****/

Route::middleware(['auth', 'verified'])->group(function () {

   Route::get('/projects/index',[ProjectController::class,'index'])->name('projects.index');
   Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
   Route::POST('/projects/index', [ProjectController::class, 'store'])->name('projects.store');
   Route::get('/projects/edit/{id}',[ProjectController::class,'edit'])->name('projects.edit');
   Route::POST('/projects/update/{id}',[ProjectController::class,'update'])->name('projects.update');
   Route::get('/projects/delete/{id}',[ProjectController::class,'delete'])->name('projects.delete');
   
});

/****** for dashboard *****/
Route::middleware(['auth', 'verified'])->group(function () {

Route::get('/admin/dashboard',[HomeController::class,'index'])->name('dashboard');
Route::get('/home',[HomeController::class,'index'])->name('admin.dashboard');

Route::get('/logout',[LogoutController::class,'logout'])->name('admin.logout');
});







