<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * コースヤードタイトルテーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('course_yardage_titles', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('コースヤードタイトルテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('course_yardage_title_id')->comment('コースヤードタイトルID');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            $table->datetime('created_at')->useCurrent()->comment('作成日時');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新日時');
        });
    }

    /**
     * デーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('course_yardage_titles');
    }
};