<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/service','services')->name('services');
Route::get('/blogs',[BlogsController::class,'index'])->name('blogs');

Route::middleware(['auth'])->group(function(){
    Route::middleware(['role:superadmin|admin'])->group(function () {
        Route::get('/admin', function () {
            return 'Admin content';
        });
        Route::view('/dashboard','admin.dashboard')->name('admin.dashboard');
        Route::get('/admin/users',[UserController::class,"index"])->name('admin.users');
        Route::get('/admin/blogs',[BlogsController::class,"adminIndex"])->name('admin.blogs');
        Route::get('/admin/services',[ServicesController::class,"index"])->name('admin.services');
        Route::get('/admin/appointments',[AppointmentsController::class,"index"])->name('admin.appointments');
    });
    Route::post('/update-password',[ProfileController::class,'updatePassword'])->name('password.change');
});
