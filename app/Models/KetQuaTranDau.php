<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetQuaTranDau extends Model
{
    use HasFactory;

    protected $table = 'ket_qua_tran_daus';

    protected $fillable = [
        'tran_dau_id',
        'doi_thang_id',
        'ti_so_doi_1',
        'ti_so_doi_2',
        'mo_ta',
    ];
}
