<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElectionTitleController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\AdminVoterController;
use App\Http\Controllers\VoteController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']],function(){

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('title', [ElectionTitleController::class, 'index'])->name('title');
    Route::get('title/create', [ElectionTitleController::class, 'create'])->name('title.create');
    Route::post('title/store', [ElectionTitleController::class, 'store'])->name('title.store');
    Route::get('title/edit/{id}', [ElectionTitleController::class, 'edit'])->name('title.edit');
    Route::put('title/update/{id}', [ElectionTitleController::class, 'update'])->name('title.update');

    Route::get('voter', [AdminVoterController::class, 'index'])->name('voters');

    Route::get('candidate', [CandidateController::class, 'index'])->name('candidate');
    Route::get('candidate/create', [CandidateController::class, 'create'])->name('candidate.create');
    Route::post('candidate/store', [CandidateController::class, 'store'])->name('candidate.store');
    Route::get('candidate/edit/{id}', [CandidateController::class, 'edit'])->name('candidate.edit');
    Route::put('candidate/update/{id}', [CandidateController::class, 'update'])->name('candidate.update');

});

Route::group(['prefix'=>'user','middleware'=>['isVoter','auth']],function(){

    Route::get('dashboard', [VoterController::class, 'index'])->name('voter.dashboard');
    Route::get('lists', [VoterController::class, 'showCandidate'])->name('voter.candidate');
    Route::post('lists/votes', [VoteController::class, 'store'])->name('vote.store');


});

Route::get('/admin/register', [App\Http\Controllers\AdminController::class, 'showForm'])->name('admin.form');
Route::post('/admin/register', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.register');


