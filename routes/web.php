<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/b/{username}', [App\Http\Controllers\ProfileController::class, 'showBusinessProfile'])->name('business.profile');
Route::get('/i/{username}', [App\Http\Controllers\ProfileController::class, 'showIndividualProfile'])->name('individual.profile');
