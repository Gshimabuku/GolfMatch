<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\All\IndexController::class, 'index'])->name('start.page');

// ログイン
Route::prefix('auth')->group(function () {
    // 新規登録
    Route::prefix('register')->group(function () {
        // 新規登録画面
        Route::get('index', [App\Http\Controllers\All\RegisterController::class, 'index'])->name('register.index');
        // 新規登録
        Route::post('new', [App\Http\Controllers\All\RegisterController::class, 'new'])->name('register.new');
    });
    // ログイン画面
    Route::get('index', [App\Http\Controllers\All\AuthController::class, 'index'])->name('auth.index');
    // ログイン
    Route::post('login', [App\Http\Controllers\All\AuthController::class, 'login'])->name('auth.login');
    // 自動ログイン
    Route::get('auto/{uuid}', [App\Http\Controllers\All\AuthController::class, 'auto'])->name('auth.auto');
});
// ログアウト
Route::get('logout', [App\Http\Controllers\All\AuthController::class, 'logout'])->name('logout');

////////////////////////////////////////////////////////////////////////////////////////////////////
// Staff
////////////////////////////////////////////////////////////////////////////////////////////////////
Route::prefix('staff')->group(function () {

    //---------------------------------------------------------------------------------------------
    // 認証後
    //---------------------------------------------------------------------------------------------
    Route::middleware(['auth'])->group(function () {

        //---------------------------------------------------------------------------------------------
        // ホーム
        //---------------------------------------------------------------------------------------------
        Route::prefix('home')->group(function () {
            // 初期表示
            Route::get('/', [App\Http\Controllers\All\Staff\IndexController::class, 'index'])->name('staff.home');
        });

        //---------------------------------------------------------------------------------------------
        // ユーザー情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('user')->group(function () {

            // 一覧
            Route::prefix('list')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('staff.user.list');
                // 検索
                Route::post('/search', [App\Http\Controllers\Controller::class, 'search'])->name('staff.user.list.search');
            });

            // 詳細
            Route::prefix('detail')->group(function () {
                // 初期表示
                Route::get('/{userId}', [App\Http\Controllers\Controller::class, 'index'])->name('staff.user.detail');
            });

            // 編集
            Route::prefix('edit')->group(function () {
                // 初期表示
                Route::get('/{userId}', [App\Http\Controllers\Controller::class, 'index'])->name('staff.user.edit');
            });
        });

        //---------------------------------------------------------------------------------------------
        // コース情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('course')->group(function () {

            // 一覧
            Route::prefix('list')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('staff.course.list');
                // 検索
                Route::post('/search', [App\Http\Controllers\Controller::class, 'search'])->name('staff.course.list.search');
            });

            // 詳細
            Route::prefix('detail')->group(function () {
                // 初期表示
                Route::get('/{courseId}', [App\Http\Controllers\Controller::class, 'index'])->name('staff.course.detail');
            });

            // 編集
            Route::prefix('edit')->group(function () {
                // 初期表示
                Route::get('/{courseId}', [App\Http\Controllers\Controller::class, 'index'])->name('staff.course.edit');
            });
        });

        //---------------------------------------------------------------------------------------------
        // お知らせ情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('notice')->group(function () {

            // 一覧
            Route::prefix('list')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('staff.notice.list');
                // 検索
                Route::post('/search', [App\Http\Controllers\Controller::class, 'search'])->name('staff.notice.list.search');
            });

            // 詳細
            Route::prefix('detail')->group(function () {
                // 初期表示
                Route::get('/{noticeId}', [App\Http\Controllers\Controller::class, 'index'])->name('staff.notice.detail');
            });

            // 編集
            Route::prefix('edit')->group(function () {
                // 初期表示
                Route::get('/{noticeId}', [App\Http\Controllers\Controller::class, 'index'])->name('staff.notice.edit');
            });
        });

        //---------------------------------------------------------------------------------------------
        // ランキング情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('ranking')->group(function () {
            // ランキングトップ
            Route::get('/top', [App\Http\Controllers\Controller::class, 'index'])->name('staff.ranking.top');
            // 各項目ランキング
            Route::get('/detail/{rankingItem}', [App\Http\Controllers\Controller::class, 'index'])->name('staff.ranking.detail');
            // ALLランキング
            Route::get('/all', [App\Http\Controllers\Controller::class, 'index'])->name('staff.ranking.all');
        });

        //---------------------------------------------------------------------------------------------
        // システム変数情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('system')->group(function () {

            // 詳細
            Route::prefix('detail')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('staff.system.detail');
            });

            // 編集
            Route::prefix('edit')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('staff.system.edit');
            });
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

        //---------------------------------------------------------------------------------------------
        // プロフィール情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('profile')->group(function () {

            // 詳細
            Route::prefix('detail')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.profile.detail');
            });

            // 編集
            Route::prefix('edit')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.profile.edit');
            });
        });

        //---------------------------------------------------------------------------------------------
        // コース情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('course')->group(function () {

            // 一覧
            Route::prefix('list')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.course.list');
                // 検索
                Route::post('/search', [App\Http\Controllers\Controller::class, 'search'])->name('distributor.course.list.search');
            });

            // 詳細
            Route::prefix('detail')->group(function () {
                // 初期表示
                Route::get('/{courseId}', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.course.detail');
            });
        });

        //---------------------------------------------------------------------------------------------
        // オリンピック設定情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('olympic')->group(function () {

            // 一覧
            Route::prefix('list')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.olympic.list');
                // 検索
                Route::post('/search', [App\Http\Controllers\Controller::class, 'search'])->name('distributor.olympic.list.search');
            });

            // 詳細
            Route::prefix('detail')->group(function () {
                // 初期表示
                Route::get('/{noticeId}', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.olympic.detail');
            });

            // 編集
            Route::prefix('edit')->group(function () {
                // 初期表示
                Route::get('/{noticeId}', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.olympic.edit');
            });
        });

        //---------------------------------------------------------------------------------------------
        // ラウンド情報
        //---------------------------------------------------------------------------------------------
        Route::prefix('round')->group(function () {

            // 新規登録
            Route::prefix('new')->group(function () {
                // 設定
                Route::prefix('setting')->group(function () {
                    // 初期表示
                    Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.round.new.setting');
                });

                // ホール
                Route::prefix('hole')->group(function () {
                    // 初期表示
                    Route::get('/{roundId}', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.round.new.hole');
                });
            });

            // 一覧
            Route::prefix('list')->group(function () {
                // 初期表示
                Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.round.list');
                // 検索
                Route::post('/search', [App\Http\Controllers\Controller::class, 'search'])->name('distributor.round.list.search');
            });

            // 詳細
            Route::prefix('detail')->group(function () {
                // 初期表示
                Route::get('/{roundId}', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.round.detail');
            });

            // 編集
            Route::prefix('edit')->group(function () {
                // 設定
                Route::prefix('setting')->group(function () {
                    // 初期表示
                    Route::get('/{roundId}', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.round.edit.setting');
                });

                // ホール
                Route::prefix('hole')->group(function () {
                    // 初期表示
                    Route::get('/{roundId}', [App\Http\Controllers\Controller::class, 'index'])->name('distributor.round.edit.hole');
                });
            });
        });
    });
});

////////////////////////////////////////////////////////////////////////////////////////////////////
// Guest
////////////////////////////////////////////////////////////////////////////////////////////////////
Route::prefix('guest')->group(function () {

    //---------------------------------------------------------------------------------------------
    // Home
    //---------------------------------------------------------------------------------------------
    Route::prefix('home')->group(function () {
        // 初期表示
        Route::get('/', [App\Http\Controllers\All\Guest\IndexController::class, 'index'])->name('guest.home');
    });
});
