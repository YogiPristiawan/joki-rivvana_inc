<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailPortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/portfolios', PortfolioController::class)->name('portfolios');
Route::get('/portfolio', DetailPortfolioController::class)->name('detail-portfolio');
Route::get('/contact', ContactController::class)->name('contact');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resources([
        'categories' => CategoryController::class,
        'services' => ServiceController::class,
        'portfolios' => AdminPortfolioController::class
    ]);
});
