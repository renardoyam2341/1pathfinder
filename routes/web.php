<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TestController;
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
Route::get('/test', [TestController::class, 'index']);

Route::get('/forms', [FormsController::class, 'index']);


use App\Http\Controllers\AppointmentController;
Route::get('/Appointment', [AppointmentController::class, 'index'])->name('Appointment.index');
Route::post('/store', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/new', [AppointmentController::class, 'create'])->name('appointments.create');
Route::get('/admin/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');



