<?php

use App\Http\Controllers\ClockController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffdayController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});



Route::resource('/birthdays', UserController::class);

Route::resource('/offdays', OffdayController::class);
// Route::post('/login_clock', [ClockController::class, 'clock_in'])->name('login_clock');












Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
