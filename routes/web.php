<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CepController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->group(function(){

    Route::resource('/user', UserController::class);
    Route::get('/', [UserController::class, 'home'])->name('admin-home');
});

Route::get('/buscar/{cep}', [CepController::class, 'buscar'])->name('buscar');



