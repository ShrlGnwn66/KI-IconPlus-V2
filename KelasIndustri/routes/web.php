<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PremiumPageController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuruTamuController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\InternVacancyController;
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
Route::get('internships', [PremiumPageController::class, 'internships'])->middleware('isLogin');
Route::get('guestTeacher', [PremiumPageController::class, 'guestTeacher'])->middleware('isLogin');
Route::get('ukkExaminer', [PremiumPageController::class, 'ukkExaminer'])->middleware('isLogin');
Route::get('jobVacancy', [PremiumPageController::class, 'jobVacancy'])->middleware('isLogin');
Route::get('internVacancy', [PremiumPageController::class, 'internVacancy'])->middleware('isLogin');
Route::get('eduTrip', [PremiumPageController::class, 'eduTrip'])->middleware('isLogin');
Route::get('additionalServices', [PremiumPageController::class, 'additionalServices'])->middleware('isLogin');

//form
Route::get('pkl', [FormController::class, 'pkl'])->middleware('isLogin');
Route::get('pkl2', [FormController::class, 'pkl2'])->middleware('isLogin');

Route::get('guruTamu', [FormController::class, 'guruTamu'])->middleware('isLogin');
Route::post('/guruTamu', [FormController::class, 'tamu']); //post

Route::get('guruMagang', [FormController::class, 'guruMagang'])->middleware('isLogin');
Route::post('/guruMagang', [FormController::class, 'guru']); //post

Route::get('pengujiUKK', [FormController::class, 'pengujiUKK'])->middleware('isLogin');
Route::post('/pengujiUKK', [FormController::class, 'penguji']); //post

// Job Vacancy
Route::get('jobVacancy', [JobVacancyController::class, 'job'])->middleware('isLogin');

//gallery and News controller news jadi satu sama Gallery
Route::get('/', [GalleryController::class, 'index']);

Route::get('news/{id}', [NewsController::class, 'news'])->name('news');

<<<<<<< HEAD
// Job Vacancy
Route::get('jobVacancy', [JobVacancyController::class, 'job']);
Route::get('internVacancy', [InternVacancyController::class, 'internjob']);
=======

>>>>>>> 8a64f0645089786d7ed5505976023fe919804f3b





