<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ラウンドモデル
 */
class Round extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'rounds';

    /**
     * 主キー
     */
    protected $primaryKey = 'round_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'user_id',
        'out_course_title_id',
        'in_course_title_id',
        'play_date',
        'total_score',
        'is_deleted',
    ];
}
