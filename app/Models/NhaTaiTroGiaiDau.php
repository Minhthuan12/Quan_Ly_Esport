<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaTaiTroGiaiDau extends Model
{
    use HasFactory;

    protected $table = 'nha_tai_tro_giai_daus';

    protected $fillable = [
        'giai_dau_id',
        'ten_nha_tai_tro',
        'logo',
    ];
}
