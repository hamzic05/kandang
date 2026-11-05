<?php


use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Chickens\ChickenController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\Medicine\MedicineController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\RegisteredGoogleController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function () {
    Route::resource('register', RegisterController::class)->only(['index', 'store'])->names([
        'index' => 'register',
        'store' => 'register.store'
    ]);

    Route::get('/register/google', [RegisteredGoogleController::class, 'redirect'])->name('register.google');

    Route::resource('login', LoginController::class)->only(['index', 'store'])->names([
        'index' => 'login',
        'store' => 'login.store'
    ]);
});

Route::get('/register/google/callback', [RegisteredGoogleController::class, 'callback'])->name('register.google.callback');
Route::post('logout', [DashboardController::class, 'logout'])->name('logout');

Route::prefix('admin')
    ->name('admin.')->middleware('auth')
    ->group(function () {
        Route::get('medicine/inventory', [MedicineController::class, 'inventory'])
        ->name('medicine.inventory');
        
        Route::resource('dashboard', DashboardController::class);
        Route::resource('medicine', MedicineController::class);
    });
