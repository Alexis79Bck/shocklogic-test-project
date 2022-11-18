<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;
use App\Http\Livewire\Admin\Events;
use App\Http\Livewire\Admin\Participants;

Route::get('/', function () {
    return redirect()->to('/login');
});

Route::get('/login', function () {
    return view('auth.theme.login');
})->name('login');

Route::post('/validate-login', [LoginController::class,'login'])->name('validate-login');

Route::get('/register', function () {
    return view('auth.theme.register');
})->name('register');

Route::post('/newAccount', [LoginController::class,'register'])->name('newAccount');


Route::prefix('admin')->group( function() {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/events', Events::class)->name('admin.events');
    Route::get('/participants', Participants::class)->name('admin.participants');
});

Route::prefix('web')->group( function() {
    Route::get('/dashboard', [WebController::class, 'index'])->name('web.home');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');




