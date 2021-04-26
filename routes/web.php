<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElectionTitleController;
use App\Http\Controllers\CandidateController;
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
Route::get('title/edit/{id}', [ElectionTitleController::class, 'edit'])->name('title.edit');
Route::put('title/update/{id}', [ElectionTitleController::class, 'update'])->name('title.update');



Route::get('candidate', [CandidateController::class, 'index'])->name('candidate');
Route::get('candidate/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('candidate/store', [CandidateController::class, 'store'])->name('candidate.store');