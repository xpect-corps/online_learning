<?php

use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\Auth\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [UserAuthController::class, 'register']);
//login user
Route::post('/login', [UserAuthController::class, 'login']);
//using middleware
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [UserAuthController::class, 'logout']);

    // courses
    Route::get('/courses', [CourseController::class, 'getCourses']);
});
