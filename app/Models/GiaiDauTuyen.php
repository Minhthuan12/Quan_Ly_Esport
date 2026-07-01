<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaiDauTuyen extends Model
{
    use HasFactory;

    protected $table = 'giai_dau_tuyens';

    protected $fillable = [
        'giai_dau_id',
        'doi_tuyen_id',
    ];
}
