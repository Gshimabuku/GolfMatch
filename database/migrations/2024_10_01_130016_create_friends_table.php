<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * フレンドテーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('friends', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('フレンドテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('friend_id')->primary()->comment('フレンドID');
            $table->unsignedBigInteger('main_user_id')->comment('フォローユーザーID');
            $table->unsignedBigInteger('friend_user_id')->comment('フォローユーザーID');
            $table->unsignedTinyInteger('un_follow')->default(0)->comment('フォロー解除');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            $table->datetime('created_at')->useCurrent()->comment('作成日時');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新日時');

            //------------------------------------------------------------------------------------------
            // リレーションシップ情報
            //------------------------------------------------------------------------------------------
            // ユーザーテーブル
            $table->foreign('main_user_id')->references('user_id')->on('users');
            $table->foreign('friend_user_id')->references('user_id')->on('users');
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('friends');
    }
};
