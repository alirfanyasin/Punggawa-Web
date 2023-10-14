<?php

use App\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Division\Gemastik\CompetitionController as DivisionCompetitionController;
use App\Http\Controllers\Division\Gemastik\ProfileController as DivisionProfileController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\CompetitionController as UserCompetitionController;
use App\Http\Controllers\User\AcademicAdvisorController as UserAcademicAdvisorController;
use App\Http\Controllers\User\InvoiceController as UserInvoiceController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\LandingPageController;
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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function () {
  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
  Route::get('/register', [AuthController::class, 'register'])->name('register');
  Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
});

// Route User or Mahasiswa
Route::middleware(['auth', 'role:user'])->group(function () {
  Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
  Route::get('/competition', [UserCompetitionController::class, 'index'])->name('competition');
  Route::get('/academic-advisor', [UserAcademicAdvisorController::class, 'index'])->name('academic-advisor');
  Route::get('/invoice', [UserInvoiceController::class, 'index'])->name('invoice');
});

// Route Super Admin
Route::middleware(['auth', 'role:super-admin'])->group(function () {
  Route::prefix('app')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('super-admin.dashboard');
  });
});

// Route Division
Route::middleware(['auth', 'role:division'])->group(function () {
  Route::prefix('division')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('division.dashboard');
    Route::get('/competition', [DivisionCompetitionController::class, 'index'])->name('division.competition');
    Route::get('/competition/create', [DivisionCompetitionController::class, 'create'])->name('division.competition.create');
    Route::post('/competition/store', [DivisionCompetitionController::class, 'store'])->name('division.competition.store');
    Route::get('/profile', [DivisionProfileController::class, 'index'])->name('division.profile');
    Route::post('/profile/update', [DivisionProfileController::class, 'update'])->name('division.profile.update');
  });
});
