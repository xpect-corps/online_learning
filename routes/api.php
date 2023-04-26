<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\DietController;
use App\Http\Controllers\API\PDFController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::get('login_personal_customer_account/{number}', 'login_personal_with_mobile');
    Route::post('set_password_customer_account', 'set_password_customer_account');

    Route::get('otp_checking_personal_account/{customer_id}/{otp}', 'otp_checking_personal_account');
    Route::get('otp_checking_clinician_account/{customer_id}/{otp}', 'otp_checking_clinician_account');
    Route::post('signup_for_customer', 'signup_for_customer');
    Route::post('login_with_password_for_customer', 'login_with_password_for_customer');
    Route::post('sent_password_reset_link', 'sent_password_reset_link');

    Route::get('privacy', 'privacy');


});


Route::middleware('auth:sanctum')->group( function () {
    Route::resource('products', ProductController::class);
    // Clinical Symptoms


});

Route::get('get_food_items/{name}',[DietController::class, 'get_food_items']);
Route::post('set_personal_datas',[CustomerController::class, 'set_personal_datas']);
Route::get('get_personal_datas/{id}',[CustomerController::class, 'get_personal_datas']);
Route::get('get_weekly_goal/{weight_controll}',[CustomerController::class, 'get_weekly_goal']);
Route::get('get_food_item_datas_with_id/{id}',[DietController::class, 'get_food_item_datas_with_id']);
Route::get('get_daily_required_calories/{id}',[DietController::class, 'get_daily_required_calories']);
Route::get('get_recommended_diet/{id}',[DietController::class, 'get_recommended_diet']);
Route::get('get_meal_types',[DietController::class, 'get_meal_types']);
Route::get('get_serving_desc_by_food_id/{id}',[DietController::class, 'get_serving_desc_by_food_id']);
Route::post('add_diet_data',[DietController::class, 'add_diet_data']);


// Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF']);
// Route::get('hhc_generate_pdf/{id}', [PDFController::class, 'hhc_generate_pdf']);

