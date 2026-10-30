<?php


use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Chickens\ChickenController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('register', RegisterController::class)->only(['index', 'store'])->names([
    'index' => 'register',
    'store' => 'register.store'
]);

Route::resource('login', LoginController::class)->only(['index', 'store'])->names([
    'index' => 'login',
    'store' => 'login.store'
])->middleware('guest');


Route::prefix('admin')
    ->name('admin.')->middleware('auth')
    ->group(function () {
        Route::resource('dashboard', DashboardController::class);
    });
