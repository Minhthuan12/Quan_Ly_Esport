<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietVanDau extends Model
{
    use HasFactory;

    protected $table = 'chi_tiet_van_daus';

    protected $fillable = [
        'tran_dau_id',
        'so_thu_tu_van',
        'thoi_gian_dau',
        'doi_thang_id',
        'video_url',
    ];
}
