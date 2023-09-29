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

    $router->resource('news', NewsController::class);

    $router->resource('form-pkls', FormPklController::class);

    $router->resource('form-paid-interns', FormPaidInternController::class);

    $router->resource('form-intern-teachers', FormInternTeacherController::class);

    $router->resource('form-ukk-examiners', FormUkkExaminerController::class);

    $router->resource('job-vacancies', JobVacancyController::class);

});
