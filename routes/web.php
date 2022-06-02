<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [\App\Http\Controllers\Controller::class, 'main'])->name('main');



Route::middleware('auth')->group(function () {
    Route::middleware(['middleware' => 'is_admin'])
        ->name('admin.')
        ->group(function () {
        include base_path("routes/group/admin.php");
    });

    Route::middleware(['auth'])->group(function (){
        include base_path("routes/group/user.php");
    });
});



/*Route::group(['middleware' => 'auth'], function () {
    Route::group([
        'middleware' => 'is_admin',
    ], function () {
        Route::get( 'administrator', function () {
            return view ('admin-panel');
        }
        );
    });
});*/





