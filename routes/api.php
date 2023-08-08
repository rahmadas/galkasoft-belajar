<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\api\auth\LogoutController;
use App\Http\Controllers\api\auth\RegisterController;
use App\Http\Controllers\Api\User\UserController;
use App\Http\Controllers\customers\CustomersController;
use App\Http\Controllers\Latian\LatianController;
use App\Http\Controllers\Reservations\ReservasionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// route untuk table customers


// Route::get('/reservation', [ReservationC::class, 'show']);

Route::apiResource('/reservations', ReservasionController::class);


// Route::get('/admin/latian/', [LatianController::class, 'create'])->name('latian.create');
// Route::post('/admin/latian/store', [LatianController::class, 'store'])->name('latian.store');
Route::apiResource('/admin/latian', LatianController::class);

// Route::apiResource('/api/auth', LoginController::class);

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);


// buat middlewere harus login terlebih dahulu
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/logout', [LogoutController::class, 'logout']);

    // buat route group 
    Route::prefix('admin')->group(function () {
        // roue untuk user
        Route::get('/user', [UserController::class, 'show']);
    });
});








Route::get('/halo/{nama?}', function ($name = "Tidak Ada Nama") {
    return '<h1>Halo ' . $name . '</h1>';
});



// Route Default
// Route::get('/admin/latian', 'latian@index');

// Route di Laravel memungkinkan kita untuk merespon semua HTTP verb.
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::match(['get', 'post'], '/', function () {
//     //
//     Route::post('/login', [LoginController::class, 'login']);
// });

// Route::any('/', function () {
//     //
//     Route::post('/login', [RegisterController::class, 'registerlogin']);
// });


Route::middleware('auth:sanctum')->get('/auth/login', function (Request $request) {
    return $request->user();
});
