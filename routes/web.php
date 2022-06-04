<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NikController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('front');
    Route::get('/search', 'cariNik')->name('cariNik');
    Route::get('/str', 'strrrr')->name('strrrr');
});


//disable register
// Route::any('/register', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::controller(HomeController::class)->group(function () {

    //disable register
    // Route::any('/register', 'index');

    Route::get('/home', 'index')->name('home');
    Route::get('/user-sistem', 'userSistem')->name('userSistem');
    Route::post('/add-user', 'addUser')->name('addUser');
    Route::delete('/user-sistem/delete/{id}', 'deleteUser')->name('deleteUser');
});

Route::controller(NikController::class)->group(function () {
    Route::get('/data-nik', 'dataNik')->name('dataNik');

    Route::get('/data-nik/input-nik', 'inputDataNik')->name('inputDataNik');
    Route::post('/add-user/input-nik/store-data-nik', 'storeDataNik')->name('storeDataNik');

    Route::get('/data-nik/edit-nik/{id}', 'editDataNik')->name('editDataNik');
    Route::put('/data-nik/edit-nik/update/{id}', 'updateDataNik')->name('updateDataNik');

    Route::delete('/data-nik/edit-nik/delete/{id}', 'deleteDataNik')->name('deleteDataNik');
});
