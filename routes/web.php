<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElectionTitleController;

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


// Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('title', [ElectionTitleController::class, 'index'])->name('title');
Route::get('title/create', [ElectionTitleController::class, 'create'])->name('title.create');
Route::post('title/store', [ElectionTitleController::class, 'store'])->name('title.store');