<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;

    protected $table = 'nguoi_dungs';

    protected $fillable = [
        // Add fillable attributes here
    ];

    protected $casts = [
        // Add attribute casting here
    ];
}
