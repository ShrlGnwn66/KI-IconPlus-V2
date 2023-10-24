<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('Users', UserController::class);

    $router->resource('galleries', GalleryController::class);

    $router->resource('gallery-kunjungans', GalleryKunjunganController::class);
    
    $router->resource('gallery-penguji-u-k-ks', GalleryPengujiUKKController::class);

    $router->resource('news', NewsController::class);

    $router->resource('form-pkls', FormPklController::class);

    $router->resource('form-guest-teachers', FormGuestTeacherController::class);

    $router->resource('form-intern-teachers', FormInternTeacherController::class);

    $router->resource('form-ukk-examiners', FormUkkExaminerController::class);

    $router->resource('job-vacancies', JobVacancyController::class);

    $router->resource('intern-vacancies', InternVacancyController::class);

});
