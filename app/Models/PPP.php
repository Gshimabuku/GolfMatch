<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ピンポンパンモデル
 */
class PPP extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'ppp';

    /**
     * 主キー
     */
    protected $primaryKey = 'ppp_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'round_id',
        'hole_id',
        'pin_member_id',
        'pon_member_id',
        'pan_member_id',
    ];
}
