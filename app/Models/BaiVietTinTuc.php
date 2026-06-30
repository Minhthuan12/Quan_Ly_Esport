<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiVietTinTuc extends Model
{
    use HasFactory;

    protected $table = 'bai_viet_tin_tucs';

    protected $fillable = [
        // Add fillable attributes here
    ];

    protected $casts = [
        // Add attribute casting here
    ];
}
