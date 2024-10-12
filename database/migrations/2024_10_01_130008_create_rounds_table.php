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
        Schema::create('rounds', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('ラウンドテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('round_id')->primary()->comment('ラウンドID');
            $table->unsignedBigInteger('user_id')->comment('ユーザーID（メインユーザー）');
            $table->unsignedBigInteger('out_course_title_id')->comment('OUTコースタイトルID');
            $table->unsignedBigInteger('in_course_title_id')->nullable()->comment('INコースタイトルID');
            $table->unsignedBigInteger('course_yardage_title_id')->comment('コースヤードタイトルID');
            $table->date('play_date')->comment('プレー日');
            $table->unsignedBigInteger('total_score')->comment('トータルスコア（メインユーザー）');
            $table->unsignedTinyInteger('is_deleted')->default(0)->comment('論理削除');

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
            // コースタイトルテーブル
            $table->foreign('out_course_title_id')->references('course_title_id')->on('course_titles');
            $table->foreign('in_course_title_id')->references('course_title_id')->on('course_titles');
            // コースヤードタイトルテーブル
            $table->foreign('course_yardage_title_id')->references('course_yardage_title_id')->on('course_yardage_titles');
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
