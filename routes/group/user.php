<?php
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[\App\Http\Controllers\Controller::class, 'main'])->name('main');

Route
    ::name('stays')
    ->group(function (){
        Route::get('/stays', [\App\Http\Controllers\StayController::class, 'index'])->name('index');
        Route::post('/stays', [\App\Http\Controllers\StayController::class, 'store'])->name('store');
    });
