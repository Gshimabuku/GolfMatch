<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * コースモデル
 */
class Course extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'courses';

    /**
     * 主キー
     */
    protected $primaryKey = 'course_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'course_name',
        'course_kana',
        'location_id',
        'address',
        'course_type',
        'course_par',
    ];
}
