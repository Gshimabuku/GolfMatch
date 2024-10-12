<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * コーステーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('コーステーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('course_id')->primary()->comment('コースID');
            $table->string('course_name', 100)->comment('コース名');
            $table->string('course_kana', 100)->comment('コース名カナ');
            $table->unsignedBigInteger('location_id')->comment('所在地ID');
            $table->string('address', 256)->comment('住所');
            $table->unsignedTinyInteger('course_type')->comment('コースタイプ');
            $table->unsignedBigInteger('course_par')->comment('パー数');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            $table->datetime('created_at')->useCurrent()->comment('作成日時');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新日時');

            //------------------------------------------------------------------------------------------
            // リレーションシップ情報
            //------------------------------------------------------------------------------------------
            // 所在地テーブル
            $table->foreign('location_id')->references('location_id')->on('locations');
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
