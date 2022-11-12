<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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
    return view('auth.theme.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/categories', MatrixThemeCategoriesComponent::class)->name('categories');



