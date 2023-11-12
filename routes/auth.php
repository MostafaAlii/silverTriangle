<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{Admin, User};
// Admins ::
Route::middleware('guest:admin')->prefix('admin')->group(function () {
    Route::get('login', [Admin\AdminAuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('login', [Admin\AdminAuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::post('logout', [Admin\AdminAuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
});

Route::middleware('guest:web')->group(function () {
    Route::post('login', [User\AuthenticatedSessionController::class, 'store'])->name('web.login');
});

Route::middleware('auth:web')->group(function () {
    Route::post('logout', [User\AuthenticatedSessionController::class, 'destroy'])->name('web.logout');
});
