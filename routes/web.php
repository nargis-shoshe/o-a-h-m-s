<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Models\Staff;

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



Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/do-login',[UserController::class,'dologin'])->name('do.login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');




Route::group(['middleware'=>'auth'], function(){
 
    Route::get('/',[HommeController::class,'index'])->name('dashboard');
    
    Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard');


    Route::get('/add',[StaffController::class,'list'])->name('add');
    Route::get('/add/make',[StaffController::class,'create'])->name('add.make');
    Route::post('/add/store',[StaffController::class,'store'])->name('add.store');
    
    Route::get('/admin',[AdminController::class,'panel']);
    
    Route::post('/admin/store',[AdminController::class,'store'])->name('admin.store');
    Route::get('/details',[CitizenController::class,'details']);
    Route::get('/details/createcitizen',[CitizenController::class,'create']);
    
    Route::get('/name',[ServiceController::class,'type']);
    Route::get('/name/form',[ServiceController::class,'form']);
    Route::post('/name/form/store',[ServiceController::class,'store'])->name('name.form.store');


    Route::get('/staff/delete/{staff_id}',[StaffController::class,'deletestaff'])->name('admin.staff.delete');
    Route::get('/staff/view/{staff_id}',[StaffController::class,'viewstaff'])->name('admin.staff.view');
    Route::get('/staff/edit/{staff_id}',[StaffController::class,'editstaff'])->name('admin.staff.edit');
    Route::put('/staff/update/{staff_id}',[StaffController::class,'update'])->name('admin.staff.update');


    
});




Route::get('/',[WebController::class,'home'])->name('webpage');

Route::post('/registration',[WebController::class,'registration'])->name('registration');