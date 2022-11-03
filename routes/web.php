<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\ServiceController;

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
Route::get('/',[HommeController::class, 'index']);
Route::get('/dashboard',[DashboardController::class,'Dashboard']);


Route::get('/add',[StaffController::class,'list']);
Route::get('/add/make',[StaffController::class,'create']);
Route::post('/add/store',[StaffController::class,'store'])->name('add.store');



Route::get('/admin',[AdminController::class,'panel']);

Route::post('/admin/store',[AdminController::class,'store'])->name('admin.store');
Route::get('/details',[CitizenController::class,'details']);
Route::get('/details/createcitizen',[CitizenController::class,'create']);

Route::get('/name',[ServiceController::class,'type']);
Route::get('/name/form',[ServiceController::class,'form']);
Route::post('/name/form/store',[ServiceController::class,'store'])->name('name.form.store');