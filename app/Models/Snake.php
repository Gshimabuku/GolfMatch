<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ヘビモデル
 */
class Snake extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'snakes';

    /**
     * 主キー
     */
    protected $primaryKey = 'snake_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'score_id',
    ];
}
