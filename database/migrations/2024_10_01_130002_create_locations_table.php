<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 所在地テーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('所在地テーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('location_id')->primary()->comment('所在地ID');
            $table->unsignedTinyInteger('is_okinawa')->default(1)->comment('県内コース');
            $table->unsignedTinyInteger('location_area_type')->comment('所在地エリアタイプ');
            $table->string('location_name', 20)->comment('所在地名（市町村名）');
            $table->string('location_kana', 20)->comment('所在地名カナ（市町村名カナ）');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            // なし

            //------------------------------------------------------------------------------------------
            // リレーションシップ情報
            //------------------------------------------------------------------------------------------
            // なし
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
