<?php

use App\Http\Controllers\AllController;
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

Route::get('/student', [AllController::class, 'Sdashboard']);
Route::get('/admin', [AllController::class, 'Adashboard']);
Route::get('/AppointmentList', [AllController::class, 'Alist']);
Route::get('/new', [AllController::class, 'newAppointment']);
Route::get('/counseling', [AllController::class, 'counseling']);
Route::get('/status', [AllController::class, 'Astatus']);
Route::get('/studentstatus', [AllController::class, 'Sstatus']);
Route::get('/MHR', [AllController::class, 'MHR']);
Route::post('/store', [AllController::class, 'store']);

