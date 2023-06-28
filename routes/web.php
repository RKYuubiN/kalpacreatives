<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ReviewerController;
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

Route::get('/', function () {
    return view('app');
});
Route::get('/applicant',[ApplicantController::class,'show'])->name('applicant');
Route::post('/drug',[ApplicantController::class,'registerDrug'])->name('registerDrug');


Route::get('/reviewer',[ReviewerController::class,'show'])->name('reviewer');
Route::get('/reviewer/review/{id}',[ReviewerController::class,'review'])->name('review');
Route::post('/reviewer/review',[ReviewerController::class,'reviewStatus'])->name('reviewstatus');