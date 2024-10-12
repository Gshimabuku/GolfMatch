<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\All\IndexController::class, 'index'])->name('start.page');

// ログイン
Route::prefix('login')->group(function () {
    // ログイン画面
    Route::get('index', [App\Http\Controllers\All\AuthController::class, 'index'])->name('login.index');
    // ログイン
    Route::post('auth', [App\Http\Controllers\All\AuthController::class, 'auth'])->name('login.auth');
    // 自動ログイン
    Route::get('auto', [App\Http\Controllers\All\AuthController::class, 'auto'])->name('login.auto');
});
// ログアウト
Route::get('logout', [App\Http\Controllers\All\AuthController::class, 'logout'])->name('staff.logout');

////////////////////////////////////////////////////////////////////////////////////////////////////
// Staff
////////////////////////////////////////////////////////////////////////////////////////////////////
Route::prefix('staff')->group(function () {

    //---------------------------------------------------------------------------------------------
    // 認証後
    //---------------------------------------------------------------------------------------------
    Route::middleware(['auth'])->group(function () {

        //---------------------------------------------------------------------------------------------
        // Home
        //---------------------------------------------------------------------------------------------
        Route::prefix('home')->group(function () {
            // 初期表示
            Route::get('/', [App\Http\Controllers\All\Staff\IndexController::class, 'index'])->name('staff.home');
        });

        //---------------------------------------------------------------------------------------------
        // コース一覧
        //---------------------------------------------------------------------------------------------
        Route::prefix('course/list')->group(function () {
            // 初期表示
            Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('staff.course.list');
            // 検索
            Route::post('/search', [App\Http\Controllers\Controller::class, 'search'])->name('staff.course.list.search');
        });
    });
});

////////////////////////////////////////////////////////////////////////////////////////////////////
// Distributor
////////////////////////////////////////////////////////////////////////////////////////////////////
Route::prefix('distributor')->group(function () {

    //---------------------------------------------------------------------------------------------
    // 認証後
    //---------------------------------------------------------------------------------------------
    Route::middleware(['auth:distributor'])->group(function () {

        //---------------------------------------------------------------------------------------------
        // Home
        //---------------------------------------------------------------------------------------------
        Route::prefix('home')->group(function () {
            // 初期表示
            Route::get('/', [App\Http\Controllers\All\Distributor\IndexController::class, 'index'])->name('distributor.home');
        });

    });
});

////////////////////////////////////////////////////////////////////////////////////////////////////
// Guest
////////////////////////////////////////////////////////////////////////////////////////////////////
Route::prefix('guest');
