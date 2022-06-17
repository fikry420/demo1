<?php

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\JurnalController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('input', InputController::class);
Route::resource('jurnal-umum', JurnalController::class);
