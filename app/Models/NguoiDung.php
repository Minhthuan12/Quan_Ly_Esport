<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;

    protected $table = 'nguoi_dungs';

    protected $fillable = [
        'ten_dang_nhap',
        'mat_khau',
        'ho_ten',
        'email',
        'avatar',
        'so_dien_thoai',
        'role_id',
        'trang_thai',
    ];

    protected $hidden = [
        'mat_khau',
    ];
}
