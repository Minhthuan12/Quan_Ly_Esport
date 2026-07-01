<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiVietTinTuc extends Model
{
    use HasFactory;

    protected $table = 'bai_viet_tin_tucs';

    protected $fillable = [
        'tieu_de',
        'slug',
        'anh_bia',
        'noi_dung',
        'ngay_dang',
        'nguoi_dang_id',
        'tom_tat',
        'luot_xem',
    ];
}
