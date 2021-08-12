<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Livewire\Welcome::class)->name('welcome');
Route::get('/form-pendaftaran', \App\Http\Livewire\FormPendaftaran::class)->name('form-pendaftaran');
Route::get('/faq', \App\Http\Livewire\Faq::class)->name('faq');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
