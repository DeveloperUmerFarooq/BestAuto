<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/service','services')->name('services');
Route::get('/blogs',[BlogsController::class,'index'])->name('blogs');

Route::middleware(['auth'])->group(function(){
    Route::middleware(['role:superadmin|admin|manager'])->group(function () {
        Route::get('/admin', function () {
            return 'Admin content';
        });
        Route::view('/dashboard','admin.dashboard')->name('dashboard');
    });
    Route::post('/update-password',[ProfileController::class,'updatePassword'])->name('password.change');
});
