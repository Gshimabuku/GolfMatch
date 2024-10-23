<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * ラウンドテーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('round_games', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('ラウンドゲームテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('round_game_id')->primary()->comment('ラウンドゲームID');
            $table->unsignedBigInteger('round_id')->comment('ラウンドID');
            $table->unsignedTinyInteger('is_olympic')->comment('オリンピック');
            $table->unsignedBigInteger('olympic_setting_id')->comment('オリンピック設定ID');
            $table->unsignedTinyInteger('is_snake')->comment('ヘビ');
            $table->unsignedTinyInteger('is_ppp')->comment('ピンポンパン');
            $table->unsignedTinyInteger('is_lasVegas')->comment('ラスベガス');
            $table->unsignedTinyInteger('is_nassau')->comment('ナッソー');
            $table->unsignedTinyInteger('is_honestJohn')->comment('オネストジョン');
            $table->unsignedTinyInteger('is_pointTourney')->comment('ポイントターニー');
            $table->unsignedTinyInteger('is_deleted')->default(0)->comment('論理削除');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            $table->datetime('created_at')->useCurrent()->comment('作成日時');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新日時');

            //------------------------------------------------------------------------------------------
            // リレーションシップ情報
            //------------------------------------------------------------------------------------------
            // ラウンドテーブル
            $table->foreign('round_id')->references('round_id')->on('rounds');
            // オリンピック設定テーブル
            $table->foreign('olympic_setting_id')->references('olympic_setting_id')->on('olympic_settings');
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('rounds');
    }
};
