<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuyenThu extends Model
{
    use HasFactory;

    protected $table = 'tuyen_thus';

    protected $fillable = [
        'doi_tuyen_id',
        'ho_ten',
        'nickname',
        'vi_tri_thi_dau',
        'avatar',
        'so_ao',
        'quoc_tich',
        'ngay_sinh',
    ];
}
