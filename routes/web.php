<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentsController;
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

Route::resource('/', HomeController::class);

Route::resource('/patients', PatientController::class);
Route::put('/patients/{patient}/done', [PatientController::class, 'changeStatus'])->name('patients.changeStatus');
Route::delete('/actions/{action}', [ActionController::class, 'delete'])->name('actions.delete');

Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');