<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongSoCauThu extends Model
{
    use HasFactory;

    protected $table = 'thong_so_cau_thus';

    protected $fillable = [
        'van_dau_id',
        'tuyen_thu_id',
        'kills',
        'deaths',
        'assists',
        'vang_kiem_duoc',
        'sat_thuong',
        'is_mvp',
    ];
}
