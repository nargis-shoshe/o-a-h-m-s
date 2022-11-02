<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;
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
Route::get('/staffs',[StaffController::class,'list']);
Route::get('/admin',[AdminController::class,'panel']);