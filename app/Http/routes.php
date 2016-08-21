<?php

Route::group(['middleware' => ['web']], function () {
    Route::resource('/', 'Home\HomeController');
    Route::resource('about', 'Home\AboutController');
    Route::resource('a-la-carte', 'Home\ALaCarteController');
    Route::resource('combinations', 'Home\CombinationsController');
    Route::resource('contact', 'Home\ContactController');
    Route::resource('detailing', 'Home\DetailingController');
    Route::resource('location', 'Home\LocationController');
    Route::resource('specials', 'Home\SpecialsController');
// Route::resource('reviews', 'Home\ReviewsController');
});