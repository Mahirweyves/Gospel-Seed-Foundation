<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\UserController;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware(['auth','verified']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// About making reservations routing
Route::post('/reservation',[HomeController::class,'reservation']);

// About all reservations made by logged in users routing
Route::get('/myreservation',[HomeController::class,'myreservation']);
Route::get('/cancel_reserve/{id}',[HomeController::class,'cancel_reserve']);

// Project routing
Route::get('/add_project',[AdminController::class,'newproject']);
Route::post('/upload_project',[AdminController::class,'upload']);
Route::get('/All_projects',[AdminController::class,'All_projects']);
// Route::get('/latest_project',[HomeController::class,'latest_project']);

// About approving and rejecting reservation routing
Route::get('/showreservation',[AdminController::class,'showreservation']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/rejected/{id}',[AdminController::class,'rejected']);

// About user in admin panel routing
Route::get('/allusers',[UserController::class,'allusers']);
Route::get('/adduser',[UserController::class,'adduser']);
Route::post('/submituser',[UserController::class,'submituser']);
Route::get('/deleteuser/{id}',[UserController::class,'deleteuser']);
Route::post('/edit/{id}',[UserController::class,'edit']);

// About sending user email routing
Route::get('/emailview/{id}',[AdminController::class,'emailview']);
Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

// All navbar page link routing
Route::get('/about',[HomeController::class,'about']);
Route::get('/booking',[HomeController::class,'booking']);
Route::get('/projects',[HomeController::class,'projects']);
// Route::get('/contact',[HomeController::class,'contact']);

// All about contact us page routing
Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');
Route::get('/message',[AdminController::class,'message']);
