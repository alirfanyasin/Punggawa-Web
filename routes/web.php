<?php

use App\DashboardController;
use App\Http\Controllers\Admin\BootcampController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ContestFollowedController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
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

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/division/gemastik', [DivisionController::class, 'gemastik'])->name('division.gemastik');

Route::get('/dashboard', [UserDashboardController::class, 'index']);
Route::get('/contest-followed', [ContestFollowedController::class, 'index']);
Route::get('/bootcamp', [BootcampController::class, 'index']);
Route::get('/certificate', [CertificateController::class, 'index']);
Route::get('/setting', [SettingController::class, 'index']);
