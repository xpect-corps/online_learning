<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DietController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Row;

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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('users_destroy',[UserController::class,'destroy']);
    Route::resource('products', ProductController::class);


    Route::resource('customers', CustomerController::class);
    Route::post('customers/delete', [CustomerController::class, 'delete'])->name('customers.delete');



Route::get('/get_datas',[LocalizationController::class,'getData'])->name('getData');

Route::get('/blank', [App\Http\Controllers\CustomController::class, 'blank_page'])->name('blank');



Route::resource('settings', SettingsController::class);



Route::post('/updateGeneral',[SettingsController::class,'updateGeneral'])->name('setting.general');
Route::post('/settings/upi_update',[SettingsController::class,'updateUPI']);
Route::post('/settings/payment_update',[SettingsController::class,'updatePayment']);
Route::post('/settings/sms_update',[SettingsController::class,'updateSMS']);



// main master
Route::get("main_masters",[MasterController::class,'index']);


Route::any('member_source/destroy/{id}',[MasterController::class,'deleteCustomerSource']);
Route::any('member_status_save',[MasterController::class,'add_member_status']);
Route::any('member_status/destroy/{id}',[MasterController::class,'deleteCustomerStatus']);
// master page
Route::get('master', [LeadMasterController::class, 'master']);


// location

Route::resource('locations',LocationController::class);
Route::get('/locations/show/{id}',[LocationController::class,'show']);
Route::get('/locations/edit/{id}',[LocationController::class,'edit']);
Route::post('/locations/update/{id}',[LocationController::class,'update']);

// Plans & Pricing

Route::get('profile_details/profile',[ ProfileController::class,'profile']);
Route::post('profile_details/update_profile',[ ProfileController::class,'updateProfile'])->name('profile.update');



});

