<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\NewAppointmentController;
use App\Http\Controllers\StudentDashboardController;
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

Route::get('/', [StudentDashboardController::class, 'index']);

Route::get('/forms', [FormsController::class, 'index']);

Route::post('/NewAppointment', [NewAppointmentController::class, 'store'])->name('NewAppointment.store');