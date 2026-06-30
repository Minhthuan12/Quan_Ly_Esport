<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoiTuyen extends Model
{
    use HasFactory;

    protected $table = 'doi_tuyens';

    protected $fillable = [
        // Add fillable attributes here
    ];

    protected $casts = [
        // Add attribute casting here
    ];
}
