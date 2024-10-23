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
    protected $table = 'round_members';

    /**
     * 主キー
     */
    protected $primaryKey = 'round_member_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'round_id',
        'user_id',
        'guest_name',
        'total_score',
    ];
}
