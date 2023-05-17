<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminNotificationController;
use App\Http\Controllers\Admin\AdminPaymentController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTagController;
use App\Http\Controllers\Admin\AdminTutorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCourseViewController;
use App\Http\Controllers\userinstructorController;
use App\Http\Controllers\UserNotificationController;
use App\Http\Controllers\UserProductController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin Route
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [AdminDashboardController::class, 'dashboard'])->name('admin.home');
    Route::get('/admin/course', [AdminCourseController::class, 'index']);
    Route::get('/admin/newcourse', [AdminCourseController::class, 'create']);
    Route::get('/admin/notification', [AdminNotificationController::class, 'index']);
    Route::get('/admin/students', [AdminStudentController::class, 'index']);
    Route::get('/admin/studentsView', [AdminStudentController::class, 'show']);
    Route::get('/admin/Category', [AdminCategoryController::class, 'index']);
    Route::get('/admin/tutor', [AdminTutorController::class, 'index']);
    Route::get('/admin/tutorcreate', [AdminTutorController::class, 'create']);
    Route::get('/admin/tutorshow', [AdminTutorController::class, 'show']);
    Route::get('/admin/payment', [AdminPaymentController::class, 'index']);
    Route::get('/admin/tag', [AdminTagController::class, 'index']);
});


// manager Routes
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [ManagerControllerr::class, 'managerHome'])->name('manager.home');
});


// Normal User Routes
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [UserController::class, 'index'])->name('home');
    Route::get('/user_profile', [UserController::class, 'profile']);
    Route::get('/Courses', [UserCourseViewController::class, 'index']);
    Route::get('/Courses_grid', [UserCourseViewController::class, 'grid']);
    Route::get('/productShow', [UserProductController::class, 'show']);
    Route::get('/productcheckout', [UserProductController::class, 'checkout']);
    Route::get('/productcart', [UserProductController::class, 'cart']);
    Route::get('/instructor_profile', [userinstructorController::class, 'index']);
    Route::get('/notification', [UserNotificationController::class, 'index']);
  

});