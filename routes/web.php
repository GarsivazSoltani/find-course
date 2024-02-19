<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('standard', [HomeController::class, 'findStandardNameForm'])->name('standard');
Route::post('standard', [HomeController::class, 'findStandard'])->name('find.standard');
Route::get('azmoon', [HomeController::class, 'fechAzmoon'])->name('azmoon');
Route::get('azmoondata', [HomeController::class, 'fechAzmoonData'])->name('azmoonData');
Route::get('azmoonhoze', [HomeController::class, 'fechAzmoonHoze'])->name('azmoonHoze');
Route::get('join', [HomeController::class, 'joinTables'])->name('joinTable');

// Route::get('standard/json', [HomeController::class, 'findStandardJson'])->name('standard.json');
