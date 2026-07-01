<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranDau extends Model
{
    use HasFactory;

    protected $table = 'tran_daus';

    protected $fillable = [
        'giai_dau_id',
        'doi_1_id',
        'doi_2_id',
        'thoi_gian',
        'ti_so',
        'trang_thai',
        'doi_thang_id',
        'dia_diem',
        'vong_dau',
        'series',
    ];
}
