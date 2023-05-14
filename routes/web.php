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
        Route::post('/course/store', [CourseController::class, 'store'])->name('admin.course.store');


        // notification
        Route::get('/notification', [NotificationController::class, 'index']);

        // student
        Route::get('/students', [StudentController::class, 'index'])->name('admin.student');
        Route::get('/student/create', [StudentController::class, 'create'])->name('admin.student.create');
        Route::post('/student/store', [StudentController::class, 'store'])->name('admin.student.store');
        Route::get('/students/view/{id}', [StudentController::class, 'show'])->name('admin.student.show');

        // category
        Route::get('/Category', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category/update ', [CategoryController::class, 'update'])->name('admin.category.update');

        // tutor
        Route::get('/tutor', [TutorController::class, 'index'])->name('admin.tutor');
        Route::get('/tutor/create', [TutorController::class, 'create'])->name('admin.tutor.create');
        Route::post('/tutor/store', [TutorController::class, 'store'])->name('admin.tutor.store');
        Route::get('/tutor/show/{id}', [TutorController::class, 'show'])->name('admin.tutor.show');
        Route::post('/tutor/update', [TutorController::class, 'update'])->name('admin.tutor.update');

        // payments
        Route::get('/payment', [PaymentController::class, 'index']);
    });
});


// tutor Routes
Route::middleware(['auth', 'user-access:tutor'])->group(function () {

    // Route::get('/tutor/home', [TutorController::class, 'tutorHome'])->name('tutor.home');
});


// Normal User Routes
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [UserController::class, 'index'])->name('home');
});
