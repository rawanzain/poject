<?php

use App\Http\Controllers\Admin\AdminBusController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CollageController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDriverController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

    Route::get('dashboard' , [DashboardController::class , 'index'])->name('admin.dashboard');

    Route::resource('student-a' , AdminStudentController::class);
    Route::resource('driver-a' , AdminDriverController::class);

Route::resource('state' , StateController::class);
Route::resource('city' , CityController::class);
Route::resource('user' , UserController::class);

Route::resource('collage' , CollageController::class);
Route::resource('bus' , AdminBusController::class);
Route::get('bus-print/{id}' , [AdminBusController::class,'printStudent'])->name('bus.print');


Route::get('login', [AdminController::class , 'show'])->name('admin.showlogin');
Route::post('login', [AdminController::class , 'adminlogin'])->name('admin.login');
Route::post('register', [AdminController::class , 'adminRegister'])->name('admin.register');


Route::get('admin-contact', [AdminContactController::class , 'show'])->name('admin-contact');
Route::post('admin-contact-replay', [AdminContactController::class , 'replay'])->name('contact.replay');
Route::post('admin-contact-destroy', [AdminContactController::class , 'destroy'])->name('contact.admin.destroy');












