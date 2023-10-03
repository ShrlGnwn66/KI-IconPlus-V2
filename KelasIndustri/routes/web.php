<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PremiumPageController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormGuruMagangController;
use App\Http\Controllers\JobVacancyController;
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

//home /root
Route::get('/', [HomeController::class, 'home'])->middleware('isPremium');

//login
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
//form
Route::get('pkl', [FormController::class, 'pkl']);
Route::post('/simpandata', [FormController::class, 'simpanData']);
Route::get('pkl2', [FormController::class, 'pkl2']);


Route::get('magangDibayar', [FormController::class, 'magangDibayar']);
Route::post('/magangDibayar', [FormController::class, 'magang']); //post

Route::get('guruMagang', [FormController::class, 'guruMagang']);
Route::post('/guruMagang', [FormController::class, 'guru']); //post

Route::get('pengujiUKK', [FormController::class, 'pengujiUKK']);
Route::post('/pengujiUKK', [FormController::class, 'penguji']); //post


//gallery and News controller news jadi satu sama Gallery
Route::get('/', [GalleryController::class, 'index']);

Route::get('news/{id}', [NewsController::class, 'news'])->name('news');

// Job Vacancy
Route::get('jobVacancy', [JobVacancyController::class, 'job']);





