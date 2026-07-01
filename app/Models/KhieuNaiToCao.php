<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhieuNaiToCao extends Model
{
    use HasFactory;

    protected $table = 'khieu_nai_to_caos';

    protected $fillable = [
        'nguoi_khieu_nai_id',
        'tieu_de',
        'noi_dung',
        'bang_chung',
        'trang_thai_xu_ly',
        'nguoi_xu_ly_id',
        'ket_qua',
    ];
}
