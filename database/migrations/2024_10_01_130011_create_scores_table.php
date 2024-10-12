<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * スコアテーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('スコアテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('score_id')->primary()->comment('スコアID');
            $table->unsignedBigInteger('round_member_id')->comment('ラウンドメンバーID');
            $table->unsignedBigInteger('hole_id')->comment('ホールID');
            $table->unsignedInteger('strokes')->comment('ストローク数');
            $table->unsignedInteger('putts')->nullable()->comment('パット数');
            $table->unsignedBigInteger('olympic_setting_type_id')->nullable()->comment('オリンピック設定タイプID');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            $table->datetime('created_at')->useCurrent()->comment('作成日時');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新日時');

            //------------------------------------------------------------------------------------------
            // リレーションシップ情報
            //------------------------------------------------------------------------------------------
            // ラウンドメンバーテーブル
            $table->foreign('round_member_id')->references('round_member_id')->on('round_members');
            // ホールテーブル
            $table->foreign('hole_id')->references('hole_id')->on('holes');
            // オリンピック設定タイプテーブル
            $table->foreign('olympic_setting_type_id')->references('olympic_setting_id')->on('olympic_setting_types');
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
