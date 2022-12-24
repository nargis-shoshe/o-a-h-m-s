<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BelongingController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DonorController;
use App\Models\Staff;
use App\Http\Controllers\EnquiryController;  
use App\Http\Controllers\MoneyController;  
use App\Http\Controllers\ProfileController;  
use App\Http\Controllers\ExpenseController;  
use App\Http\Controllers\AboutController;  
use App\Http\Controllers\RegistrationController;  

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




Route::group(['middleware'=>'auth' ,'prefix'=>'admin'], function(){
Route::group(['middleware'=>'admin'], function(){
   
    Route::get('/',[HommeController::class,'index'])->name('dashboard');
    
    Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('home');

    Route::get('/user',[UserController::class,'userlist'])->name('user.list');
    Route::get('/user/active/{user_id}',[UserController::class,'active'])->name('user.active');
    Route::get('/user/reject/{user_id}',[UserController::class,'reject'])->name('user.reject');

    Route::get('/scuser',[RegistrationController::class,'scuserlist'])->name('scuser.list');
    Route::get('/scuser/active/{scuser_id}',[RegistrationController::class,'active'])->name('scuser.active');
    Route::get('/scuser/reject/{scuser_id}',[RegistrationController::class,'reject'])->name('scuser.reject');
 
 


    Route::get('/add',[StaffController::class,'list'])->name('add');
    Route::get('/add/make',[StaffController::class,'create'])->name('add.make');
    Route::post('/add/store',[StaffController::class,'store'])->name('add.store');
    
    Route::get('/admin',[AdminController::class,'panel'])->name('admin');
    Route::post('/admin/store',[AdminController::class,'store'])->name('admin.store');


    Route::get('/details',[CitizenController::class,'list'])->name('details');
    Route::get('/formdetails',[CitizenController::class,'form'])->name('formdetails');
    Route::post('/formstore',[CitizenController::class,'store'])->name('form.store');

    
    Route::get('/name',[ServiceController::class,'type'])->name('name');
    Route::get('/name/form',[ServiceController::class,'form'])->name('name.form');
    Route::post('/name/form/store',[ServiceController::class,'store'])->name('name.form.store');


    Route::get('/staff/delete/{staff_id}',[StaffController::class,'deletestaff'])->name('admin.staff.delete');
    Route::get('/staff/view/{staff_id}',[StaffController::class,'viewstaff'])->name('admin.staff.view');
    Route::get('/staff/edit/{staff_id}',[StaffController::class,'editstaff'])->name('admin.staff.edit');
    Route::put('/staff/update/{staff_id}',[StaffController::class,'update'])->name('admin.staff.update');


    Route::get('/donor',[DonorController::class,'donor'])->name('donor');
    Route::get('/donor/form',[DonorController::class,'donorform'])->name('donor.form');
    Route::post('/donor/store',[DonorController::class,'store'])->name('donor.store');


    Route::get('/donor/delete/{donor_id}',[DonorController::class,'deletedonor'])->name('admin.donor.delete');
    Route::get('/donor/view/{donor_id}',[DonorController::class,'viewdonor'])->name('admin.donor.view');
    Route::get('/donor/edit/{donor_id}',[DonorController::class,'editdonor'])->name('admin.donor.edit');
    Route::put('/donor/update/{donor_id}',[DonorController::class,'updatedonor'])->name('admin.donor.update');


    Route::get('/enquiry/list',[EnquiryController::class,'enquirylist'])->name('enquiry.list');

    Route::get('/donation/list',[BelongingController::class,'donationlist'])->name('donation.list');

    Route::get('/donatemoney/list',[MoneyController::class,'donation_moneylist'])->name('donatemmoney.list');
    Route::get('/donatemoney/view{donor_id}',[MoneyController::class,'viewdonation'])->name('admin.donatemmoney.view');

    //report generation
    Route::get('/report',[MoneyController::class,'report'])->name('donatemmoney.report');
    Route::get('/report/search',[MoneyController::class,'reportsearch'])->name('donatemmoney.report.search');



    Route::get('/expense',[ExpenseController::class,'expenselist'])->name('expenselist');
    Route::get('/expense/form',[ExpenseController::class,'expenseform'])->name('expenseform');
    Route::post('/expense/store',[ExpenseController::class,'expensestore'])->name('expensestore');


    Route::get('/expense/delete/{expense_id}',[ExpenseController::class,'deleteexpense'])->name('admin.expense.delete');
    Route::get('/expense/view/{expense_id}',[ExpenseController::class,'viewexpense'])->name('admin.expense.view');
    Route::get('/expense/edit/{expense_id}',[ExpenseController::class,'editexpense'])->name('admin.expense.edit');
    Route::put('/expense/update/{expense_id}',[ExpenseController::class,'update'])->name('admin.expense.update');

    Route::get('/about',[AboutController::class,'aboutlist'])->name('aboutlist');
    Route::get('/about/form',[AboutController::class,'aboutform'])->name('aboutform');
    Route::post('/about/store',[AboutController::class,'aboutstore'])->name('aboutstore');



    
});
});




Route::get('/',[WebController::class,'home'])->name('webpage');

Route::post('/scregistration',[RegistrationController::class,'scregistration'])->name('scregistration');
Route::post('/registration',[WebController::class,'registration'])->name('registration');
Route::post('/user/login',[WebController::class,'login'])->name('user.login');
 
Route::get('/enquiry',[EnquiryController::class,'list'])->name('enquiry');
Route::post('/enquiry/store',[EnquiryController::class,'store'])->name('enquiry.store');

//Route::get('/belonging',[BelongingController::class,'list'])->name('belonging');
//Route::post('/belonging/form',[BelongingController::class,'belongingsform'])->name('belonging.form');

Route::get('/money',[MoneyController::class,'Moneyform'])->name('money');
Route::post('/money/store',[MoneyController::class,'Moneystore'])->name('money.store');
Route::group(['middleware' => 'auth'], function () {
Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
Route::put('/update/profile',[ProfileController::class,'updateprofile'])->name('update.profile');
Route::put('/profile/update',[ProfileController::class,'updateImage'])->name('profile.update.image');
Route::get('/user/logout',[WebController::class,'logout'])->name('user.logout');
});