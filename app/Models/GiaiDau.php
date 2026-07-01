<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaiDau extends Model
{
    use HasFactory;

    protected $table = 'giai_daus';

    protected $fillable = [
        'ten_giai',
        'game_id',
        'trang_thai',
        'anh_bia',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'giai_thuong',
        'so_doi_tham_gia',
        'so_doi_toi_da',
        'the_thuc',
        'luat_le',
        'mo_ta',
        'hinh_thuc',
    ];
}
