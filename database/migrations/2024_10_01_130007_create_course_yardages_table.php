<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * コースヤードテーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('course_yardages', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('コースヤードテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('course_yardage_id')->primary()->comment('コースヤードID');
            $table->unsignedBigInteger('course_yardage_title_id')->comment('コースヤードタイトルID');
            $table->unsignedBigInteger('hole_id')->comment('ホールID');
            $table->unsignedInteger('yardage')->comment('ヤード数');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            $table->datetime('created_at')->useCurrent()->comment('作成日時');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新日時');

            //------------------------------------------------------------------------------------------
            // リレーションシップ情報
            //------------------------------------------------------------------------------------------
            // コースヤードタイトルテーブル
            $table->foreign('course_yardage_title_id')->references('course_yardage_title_id')->on('course_yardage_titles');
            // ホールテーブル
            $table->foreign('hole_id')->references('hole_id')->on('holes');
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('course_yardages');
    }
};
