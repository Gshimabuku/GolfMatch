<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ラウンドメンバーモデル
 */
class Round_member extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'olympic_setting_type';

    /**
     * 主キー
     */
    protected $primaryKey = 'olympic_setting_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'round_id',
        'olympic_type',
        'point',
    ];
}
