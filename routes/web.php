<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubscriptController;
use App\Http\Controllers\TryController;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::post('get-cities-by-state',[StateController::class , 'getCity']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('try/{id}',[\App\Http\Controllers\TryController::class , 'trys'])->name('trys');

Route::get('/',[PageController::class , 'welcome'])->name('welcome');
Route::get('contact',[PageController::class , 'contact'])->name('contact');
Route::get('about-us',[PageController::class , 'aboutus'])->name('about-us');
Route::get('services',[PageController::class , 'service'])->name('service');
Route::post('/s',[\App\Http\Controllers\searchController::class,'search'])->name('search');
Route::post('/s1',[\App\Http\Controllers\searchController::class,'search1'])->name('search1');


Route::group( ['middleware'=>'verified'], function () {
    Route::get('student-account', [PageController::class, 'studentaccount'])->name('studentaccount');
    Route::get('driver-account', [PageController::class, 'driveraccount'])->name('driveraccount');
}
);
Route::resource('student' , StudentController::class);
Route::resource('driver' , DriverController::class);





Route::resource('profile-student' , \App\Http\Controllers\StudentProfileController::class);
Route::resource('profile-driver' , \App\Http\Controllers\DriverProfileController::class);
Route::resource('complaint' , \App\Http\Controllers\ComplaintController::class);
Route::get('complaint/replay/{id}' , [\App\Http\Controllers\ComplaintController::class , 'showreplay'])->name('showreplay')
;

Route::post('complaint/replay' , [\App\Http\Controllers\ComplaintController::class , 'sendreplay'])->name('sendreplay')
;



Route::post('contact',[ContactController::class , 'store'])->name('contact.store');
Route::get('getthanks',[ContactController::class , 'getthank'])->name('contact.thanks');

Route::get('thanks/{string}' ,[SubscriptController::class , 'thanks'] )->name('thanks');
Route::post('delete-student/{id}/{type}' ,[SubscriptController::class , 'deletestudent'] )->name('delete-student');
Route::post('rating/{id}' ,[SubscriptController::class , 'rating'] )->name('rating');

Route::get('thanks1' ,[TryController::class , 'thanks'] )->name('thanks1');

Route::post('delete-student/{id}' ,[SubscriptController::class , 'destroy'] )->name('destroy-student');
Route::get('subscript/{id}' ,[SubscriptController::class , 'store'] )->name('subscript');
Route::get('show-bus/{id}' ,[SubscriptController::class , 'showbus'] )->name('show-bus');


Route::get('/logout' , function (){
   Auth::logout();
   return redirect()->route('welcome');
})->name('logout_');





















