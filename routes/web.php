<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/ad', [AdPageController::class, 'show'])->name('ad.page');
Route::get('/ad-label', [AdPageController::class, 'label'])->name('ad.label');

// 後台管理路由
Route::prefix('admin')->name('admin.')->group(function () {
    // 登入頁面（未登入才能訪問）
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');

    // 處理登入
    Route::post('/login', [AdminController::class, 'login'])->name('login');

    // 後台首頁（需要登入）
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

        // 修改密碼
        Route::get('/change-password', [AdminController::class, 'showChangePasswordForm'])->name('password.change');
        Route::post('/change-password', [AdminController::class, 'updatePassword'])->name('password.update');

        // 分類管理
        Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
        Route::get('/categories/create', [AdminController::class, 'createCategory'])->name('categories.create');
        Route::post('/categories', [AdminController::class, 'storeCategory'])->name('categories.store');
        Route::get('/categories/{id}/edit', [AdminController::class, 'editCategory'])->name('categories.edit');
        Route::put('/categories/{id}', [AdminController::class, 'updateCategory'])->name('categories.update');
        Route::delete('/categories/{id}', [AdminController::class, 'deleteCategory'])->name('categories.delete');

        // 廣告管理
        Route::get('/ads', [AdminController::class, 'ads'])->name('ads');
        Route::get('/ads/create', [AdminController::class, 'createAd'])->name('ads.create');
        Route::post('/ads', [AdminController::class, 'storeAd'])->name('ads.store');
        Route::get('/ads/{id}/edit', [AdminController::class, 'editAd'])->name('ads.edit');
        Route::put('/ads/{id}', [AdminController::class, 'updateAd'])->name('ads.update');
        Route::delete('/ads/{id}', [AdminController::class, 'deleteAd'])->name('ads.delete');

        // 聯盟廣告管理
        Route::get('/alliance-ads', [AdminController::class, 'allianceAds'])->name('alliance-ads');
        Route::get('/alliance-ads/create', [AdminController::class, 'createAllianceAd'])->name('alliance-ads.create');
        Route::post('/alliance-ads', [AdminController::class, 'storeAllianceAd'])->name('alliance-ads.store');
        Route::get('/alliance-ads/{id}/edit', [AdminController::class, 'editAllianceAd'])->name('alliance-ads.edit');
        Route::put('/alliance-ads/{id}', [AdminController::class, 'updateAllianceAd'])->name('alliance-ads.update');
        Route::delete('/alliance-ads/{id}', [AdminController::class, 'deleteAllianceAd'])->name('alliance-ads.delete');

        // 網站記事管理
        Route::get('/timeline-items', [AdminController::class, 'timelineItems'])->name('timeline-items');
        Route::get('/timeline-items/create', [AdminController::class, 'createTimelineItem'])->name('timeline-items.create');
        Route::post('/timeline-items', [AdminController::class, 'storeTimelineItem'])->name('timeline-items.store');
        Route::get('/timeline-items/{id}/edit', [AdminController::class, 'editTimelineItem'])->name('timeline-items.edit');
        Route::put('/timeline-items/{id}', [AdminController::class, 'updateTimelineItem'])->name('timeline-items.update');
        Route::delete('/timeline-items/{id}', [AdminController::class, 'deleteTimelineItem'])->name('timeline-items.delete');
    });
});
