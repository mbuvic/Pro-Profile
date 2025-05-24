<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/b/{username}', [App\Http\Controllers\ProfileController::class, 'showBusinessProfile'])->name('business.profile');
Route::get('/i/{username}', [App\Http\Controllers\ProfileController::class, 'showIndividualProfile'])->name('individual.profile');


Route::get('/clear', function () {
    // if (!app()->isLocal()) {
    //     abort(403, 'Unauthorized');
    // }
    
    Artisan::call('config:clear');   // Clear old cached config
    Artisan::call('cache:clear');    // Clear app cache
    Artisan::call('route:clear');    // Clear route cache
    Artisan::call('view:clear');     // Clear compiled Blade views
    Artisan::call('config:cache');   // Re-cache config from fresh .env

    return 'Cleared!';
});

//php artisan storage:link
Route::get('/storage-link', function () {
    // if (!app()->isLocal()) {
    //     abort(403, 'Unauthorized');
    // }

    Artisan::call('storage:link');
    return 'Storage linked!';
});


Route::get('/migrate-fresh', function () {
    // if (!app()->isLocal()) {
    //     abort(403, 'Unauthorized');
    // }

    Artisan::call('migrate:fresh --seed');
    return 'Migrated Fresh!';
});

Route::get('/migrate', function () {
    // if (!app()->isLocal()) {
    //     abort(403, 'Unauthorized');
    // }

    Artisan::call('migrate');
    return 'Migrated!';
});
    