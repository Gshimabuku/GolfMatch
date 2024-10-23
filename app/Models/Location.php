<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 所在地モデル
 */
class Location extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'locations';

    /**
     * 主キー
     */
    protected $primaryKey = 'location_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'is_okinawa',
        'location_area_type',
        'location_name',
        'location_kana',
    ];
}
