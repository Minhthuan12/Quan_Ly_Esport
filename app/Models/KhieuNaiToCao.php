<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhieuNaiToCao extends Model
{
    use HasFactory;

    protected $table = 'khieu_nai_to_caos';

    protected $fillable = [
        // Add fillable attributes here
    ];

    protected $casts = [
        // Add attribute casting here
    ];
}
