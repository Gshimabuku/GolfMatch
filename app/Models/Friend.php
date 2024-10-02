<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * フレンドモデル
 */
class Friend extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'friends';

    /**
     * 主キー
     */
    protected $primaryKey = 'friend_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'main_user_id',
        'friend_user_id',
        'is_deleted'
    ];
}
