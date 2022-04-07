<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaddaUppBostadController;
use App\Http\Controllers\SokBostadController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HyrkontraktController;
use App\Http\Controllers\HyrutController;
use App\Http\Controllers\SkapaKontoController;
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

Route::view('/', 'index')->name('index');
Route::get('contact', ContactController::class);
Route::get('help', HelpController::class);
Route::get('hyrkontrakt', HyrkontraktController::class);
Route::get('hyrut', HyrutController::class);
Route::get('sokbostad', [SokBostadController::class, 'searchView']);
Route::post('laddauppbostad', LaddaUppBostadController::class);
Route::get('login', [LoginController::class, 'viewLogin'])->middleware('guest');
Route::post('login', [LoginController::class, 'login']);
Route::get('skapakonto', [SkapaKontoController::class, 'viewCreateForm'])->middleware('guest');
Route::post('skapakonto', [SkapaKontoController::class, 'createAccount']);
