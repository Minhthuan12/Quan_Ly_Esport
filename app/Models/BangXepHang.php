<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangXepHang extends Model
{
    use HasFactory;

    protected $table = 'bang_xep_hangs';

    protected $fillable = [
        'giai_dau_id',
        'doi_tuyen_id',
        'hang',
        'thang',
        'thua',
        'he_so',
        'diem',
    ];
}
