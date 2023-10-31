<?php

use App\Http\Controllers\SuperAdmin\DashboardController as SuperAdminDashboardController;
use App\Http\Controllers\SuperAdmin\AcademicAdvisorController as SuperAdminAcademicAdvisorController;
use App\Http\Controllers\SuperAdmin\InvoiceController as SuperAdminInvoiceController;
use App\Http\Controllers\SuperAdmin\AccountController as SuperAdminAccountController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Division\CompetitionController as DivisionCompetitionController;
use App\Http\Controllers\Division\ProfileController as DivisionProfileController;
use App\Http\Controllers\Division\DashboardController as DivisionDashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\CompetitionController as UserCompetitionController;
use App\Http\Controllers\User\AcademicAdvisorController as UserAcademicAdvisorController;
use App\Http\Controllers\User\InvoiceController as UserInvoiceController;
use App\Http\Controllers\User\AccountSetting as UserAccountSetting;
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

// Symblink
Route::get('symblink', function () {
  $targetFolder = base_path() . '/storage/app/public';
  $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
  symlink($targetFolder, $linkFolder);
});



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
  Route::get('competition/{id}/show', [UserCompetitionController::class, 'show'])->name('competition.show');
  Route::get('/academic-advisor', [UserAcademicAdvisorController::class, 'index'])->name('academic-advisor');
  Route::get('/invoice', [UserInvoiceController::class, 'index'])->name('invoice');
  Route::get('/invoice/create', [UserInvoiceController::class, 'create'])->name('invoice.create');
  Route::get('/invoice/selected/{id}', [UserInvoiceController::class, 'selected'])->name('invoice.selected');
  Route::post('/invoice/submit', [UserInvoiceController::class, 'store'])->name('invoice.store');

  // Account.
  Route::get('/my/account', [UserAccountSetting::class, 'index'])->name('account.setting');
  Route::patch('/account/update', [UserAccountSetting::class, 'update'])->name('account.update');
});

// Route Super Admin
Route::middleware(['auth', 'role:super-admin'])->group(function () {
  Route::prefix('app')->group(function () {
    Route::get('/dashboard', [SuperAdminDashboardController::class, 'index'])->name('super-admin.dashboard');
    Route::get('/academic-advisor', [SuperAdminAcademicAdvisorController::class, 'index'])->name('super-admin.academic-advisor');
    Route::get('/invoice', [SuperAdminInvoiceController::class, 'index'])->name('super-admin.invoice');
    Route::get('/account', [SuperAdminAccountController::class, 'index'])->name('super-admin.account');
  });
});

// Route Division
Route::middleware(['auth', 'role:division'])->group(function () {
  Route::prefix('division')->group(function () {
    Route::get('/dashboard', [DivisionDashboardController::class, 'index'])->name('division.dashboard');
    Route::get('/competition', [DivisionCompetitionController::class, 'index'])->name('division.competition');
    Route::get('/competition/create', [DivisionCompetitionController::class, 'create'])->name('division.competition.create');
    Route::post('/competition/store', [DivisionCompetitionController::class, 'store'])->name('division.competition.store');
    Route::get('/competition/{id}/show', [DivisionCompetitionController::class, 'show'])->name('division.competition.show');
    Route::get('/competition/{id}/edit', [DivisionCompetitionController::class, 'edit'])->name('division.competition.edit');
    Route::put('/competition/{id}/update', [DivisionCompetitionController::class, 'update'])->name('division.competition.update');
    Route::delete('/competition/{id}/delete', [DivisionCompetitionController::class, 'destroy'])->name('division.competition.delete');
    Route::patch('/competition/{id}/done', [DivisionCompetitionController::class, 'done'])->name('division.competition.done');
    Route::get('/profile', [DivisionProfileController::class, 'index'])->name('division.profile');
    Route::post('/profile/{user_id}/update', [DivisionProfileController::class, 'update'])->name('division.profile.update');
  });
});
