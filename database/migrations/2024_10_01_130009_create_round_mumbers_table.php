<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * ラウンドメンバーテーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('round_members', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('ラウンドメンバーテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('round_member_id')->primary()->comment('ラウンドメンバーID');
            $table->unsignedBigInteger('round_id')->comment('ラウンドID');
            $table->unsignedBigInteger('user_id')->nullable()->comment('ユーザーID');
            $table->string('guest_name', 20)->nullable()->comment('ゲスト名');
            $table->unsignedInteger('total_score')->comment('トータルスコア');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            $table->datetime('created_at')->useCurrent()->comment('作成日時');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新日時');

            //------------------------------------------------------------------------------------------
            // リレーションシップ情報
            //------------------------------------------------------------------------------------------
            // ユーザーテーブル
            $table->foreign('user_id')->references('user_id')->on('users');
            // ラウンドテーブル
            $table->foreign('round_id')->references('round_id')->on('rounds');
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('round_members');
    }
};
