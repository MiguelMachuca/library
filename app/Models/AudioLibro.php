<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioLibro extends Model
{
    use HasFactory;

    protected $table ='audios_libro';

    protected $fillable = [
        'audio',
        'user_id',
        'libro_id',
        'idioma_id',
    ];
}
