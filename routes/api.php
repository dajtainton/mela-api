<?php

use App\Http\Controllers\CountriesController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get(
        'countries',
        [CountriesController::class, 'index']
    )->name('api.countries');
});
