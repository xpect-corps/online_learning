<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin Route
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        // dashboard
        Route::get('/home', [DashboardController::class, 'dashboard'])->name('admin.home');

        // course
        Route::get('/course', [CourseController::class, 'index'])->name('admin.course');
        Route::get('/course/create', [CourseController::class, 'create'])->name('admin.course.create');

        // notification
        Route::get('/notification', [NotificationController::class, 'index']);

        // student
        Route::get('/students', [StudentController::class, 'index']);
        Route::get('/studentsView', [StudentController::class, 'show']);

        // category
        Route::get('/Category', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');

        // tutor
        Route::get('/tutor', [TutorController::class, 'index']);
        Route::get('/tutorcreate', [TutorController::class, 'create']);
        Route::get('/tutorshow', [TutorController::class, 'show']);

        // payments
        Route::get('/payment', [PaymentController::class, 'index']);
    });
});


// manager Routes
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [ManagerControllerr::class, 'managerHome'])->name('manager.home');
});


// Normal User Routes
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [UserController::class, 'index'])->name('home');
});
