<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class , 'index']);
Route::get('about', [HomeController::class , 'about'])->name('about');
Route::get('services', [HomeController::class , 'services'])->name('services');
Route::get('portfolio', [HomeController::class , 'portfolio'])->name('portfolio');
Route::get('faq', [HomeController::class , 'faq'])->name('faq');
Route::get('contact', [HomeController::class , 'contact'])->name('contact');