<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoiTuyen extends Model
{
    use HasFactory;

    protected $table = 'doi_tuyens';

    protected $fillable = [
        'ten_doi',
        'ten_viet_tat',
        'logo',
        'anh_bia',
        'mo_ta',
        'diem_so',
        'nguoi_quan_ly_id',
        'email',
        'so_dien_thoai',
    ];
}
