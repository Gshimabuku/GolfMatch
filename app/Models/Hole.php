<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ホールモデル
 */
class Hole extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'holes';

    /**
     * 主キー
     */
    protected $primaryKey = 'hole_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'course_title_id',
        'hole_number',
        'par',
    ];
}
