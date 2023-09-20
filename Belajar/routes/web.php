<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PremiumPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//home /root
Route::get('/', [HomeController::class, 'home'])->middleware('isPremium');

//login pxe
// Route::get('welcome', [LoginController::class, 'welcome']);
Route::get('login', [LoginController::class, 'login'])->middleware('isPremium');

//auth
Route::post('login', [LoginController::class, 'auth']);
Route::post('logout', [LoginController::class, 'logout']);

//page premium
Route::get('home', [PremiumPageController::class, 'home'])->middleware('isLogin');
Route::get('internships', [PremiumPageController::class, 'internships']);
Route::get('guestTeacher', [PremiumPageController::class, 'guestTeacher']);
Route::get('ukkExaminer', [PremiumPageController::class, 'ukkExaminer']);
Route::get('jobVacancy', [PremiumPageController::class, 'jobVacancy']);
Route::get('internVacancy', [PremiumPageController::class, 'internVacancy']);
Route::get('eduTrip', [PremiumPageController::class, 'eduTrip']);
Route::get('additionalServices', [PremiumPageController::class, 'additionalServices']);

//gallery
Route::get('/', [GalleryController::class, 'index']);

//news
Route::get('news', [NewsController::class, 'news']);

