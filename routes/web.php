<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\WorkController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\TestEmailController;

// use App\Http\Controllers\Admin\AdminContactController;
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
//     return view('frontend.index');
// });

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/services', [ServicesController::class,'index'])->name('services');
Route::get('/work', [WorkController::class,'index'])->name('work');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/contact/create', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'ContactUsForm'])->name('contact.store');
Route::get('/send-test-email', [TestEmailController::class, 'sendTestEmail']);