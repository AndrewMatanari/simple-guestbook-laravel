<?php
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'index'])->name('guest.index');
Route::post('/store', [GuestController::class, 'store'])->name('guest.store');
Route::get('/form', [GuestController::class, 'form'])->name('guest.form');