<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = [
        'ten_game',
        'ten_tieng_anh',
        'the_loai',
        'logo',
        'anh_bia',
        'mo_ta',
        'trang_thai',
    ];
}
