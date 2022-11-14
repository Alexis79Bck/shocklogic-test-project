<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;
use App\http\Livewire\CorkTheme\Category\Categories as CorkThemeCategoriesComponent;
use App\http\Livewire\MatrixTheme\Category\Categories as MatrixThemeCategoriesComponent;
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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group( function() {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.home');
    });
    Route::prefix('web')->group( function() {
        Route::get('/dashboard', [WebController::class, 'index'])->name('web.home');
    });
});
Route::get('/home', [HomeController::class, 'index'])->name('home');




