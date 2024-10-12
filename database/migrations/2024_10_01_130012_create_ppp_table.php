<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * テーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('ppp', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('ピンポンパンテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('ppp_id')->primary()->comment('ピンポンパンID');
            $table->unsignedBigInteger('round_id')->comment('ラウンドID');
            $table->unsignedBigInteger('hole_id')->comment('ホールID');
            $table->unsignedBigInteger('pin_member_id')->comment('ピンメンバーID');
            $table->unsignedBigInteger('pon_member_id')->comment('ポンメンバーID');
            $table->unsignedBigInteger('pan_member_id')->comment('パンメンバーID');

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
            // ホールテーブル
            $table->foreign('hole_id')->references('hole_id')->on('holes');
            // ラウンドメンバーテーブル
            $table->foreign('pin_member_id')->references('round_member_id')->on('round_members');
            $table->foreign('pon_member_id')->references('round_member_id')->on('round_members');
            $table->foreign('pan_member_id')->references('round_member_id')->on('round_members');
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('ppp');
    }
};
