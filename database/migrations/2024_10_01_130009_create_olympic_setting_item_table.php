<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * オリンピック設定タイプテーブル
 */
return new class extends Migration
{
    /**
     * テーブル作成
     */
    public function up(): void
    {
        Schema::create('olympic_setting_types', function (Blueprint $table) {

            //------------------------------------------------------------------------------------------
            // テーブルコメント
            //------------------------------------------------------------------------------------------
            $table->comment('ユーザーテーブル');

            //------------------------------------------------------------------------------------------
            // カラム
            //------------------------------------------------------------------------------------------
            $table->bigIncrements('olympic_setting_type_id')->primary()->comment('オリンピック設定タイプID');
            $table->unsignedBigInteger('olympic_setting_id')->comment('オリンピック設定ID');
            $table->unsignedTinyInteger('olympic_type')->comment('オリンピックタイプ');
            $table->unsignedBigInteger('point')->comment('ポイント数');

            //------------------------------------------------------------------------------------------
            // 共通カラム
            //------------------------------------------------------------------------------------------
            $table->datetime('created_at')->useCurrent()->comment('作成日時');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate()->comment('更新日時');

            //------------------------------------------------------------------------------------------
            // リレーションシップ情報
            //------------------------------------------------------------------------------------------
            // 所在地テーブル
            $table->foreign('olympic_setting_id')->references('olympic_setting_id')->on('olympic_settings');
        });
    }

    /**
     * テーブル削除
     */
    public function down(): void
    {
        Schema::dropIfExists('olympic_setting_types');
    }
};
