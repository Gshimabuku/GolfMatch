<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * スコアモデル
 */
class Score extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'scores';

    /**
     * 主キー
     */
    protected $primaryKey = 'score_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'round_member_id',
        'hole_id',
        'strokes',
        'putts',
        'olympic_setting_type_id',
    ];
}
