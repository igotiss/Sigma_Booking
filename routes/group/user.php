<?php
use Illuminate\Support\Facades\Route;


// Stays
Route
    ::name('stays.')
    ->prefix('stays')
    ->group(function (){
        Route::get('/', [\App\Http\Controllers\StayController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Api\StayController::class, 'index'])->name('create');
        Route::post('/', [\App\Http\Controllers\StayController::class, 'store'])->name('store');
        Route::get('/{stay}', [\App\Http\Controllers\StayController::class, 'store'])->name('show');
        Route::delete('/{stay}', [\App\Http\Controllers\StayController::class, 'destroy'])->name('delete');
        Route::get('/{stay}/edit', [\App\Http\Controllers\StayController::class, 'edit'])->name('edit');
        Route::patch('/{stay}', [\App\Http\Controllers\StayController::class, 'update'])->name('update');
    });
