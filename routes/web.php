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

Route::get('/', [AllController::class, 'Sdashboard'])->name('sdashboard.index');
Route::get('/admin', [AllController::class, 'Adashboard']);
Route::get('/AppointmentList', [AllController::class, 'Alist'])->name('AppointmentList.index');
Route::get('/student/newappointment', [AllController::class, 'newAppointment']);
Route::get('/student/counseling', [AllController::class, 'counseling']);
Route::get('/admin/counseling', [AllController::class, 'Acounseling']);
Route::get('/admin/status', [AllController::class, 'Astatus']);
Route::get('/student/status', [AllController::class, 'Sstatus']);
Route::get('/student/MHR', [AllController::class, 'MHR']);
Route::post('/store', [AllController::class, 'store']);
Route::get('/student/forms', [AllController::class, 'forms']);
Route::put('/update/{id}', [AllController::class, 'update'])->name('appointments.update');
Route::get('/admin/roomcreate', [AllController::class, 'createroom']);
Route::get('/admin/dashboard', [AllController::class, 'adminD']);


Auth::routes();

Route::get('/login', [AllController::class, 'login'])->name('login');
