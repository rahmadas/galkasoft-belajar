<?php

use App\Http\Controllers\Latian\LatianController;
use GuzzleHttp\Promise\Create;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/admin/contact', ContactController::class);
// Route::get('admin/contact/create', [ContactController::class, 'create'])->name('contact.create');
// Route::post('admin/contact/store', [ContactController::class, 'store'])->name('contact.store');

// route for latian
// Route::get('admin.latian.create', [LatiansController::class, 'create'])->name('latian.create');
// Route::get('admin.latian.store', [LatiansController::class, 'store'])->name('latian.store');
