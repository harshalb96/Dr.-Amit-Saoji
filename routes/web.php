<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// Auth
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/appointments', [AdminController::class, 'appointments'])->name('admin.appointments');
    Route::delete('/appointments/{appointment}', [AdminController::class, 'destroyAppointment'])->name('admin.appointments.destroy');
});
