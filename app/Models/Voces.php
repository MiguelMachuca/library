<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Idioma;

class Voces extends Model
{
    use HasFactory;
    protected $table = 'voz';

    protected $fillable = [
        'nombre',
        'codigo_voz',
        'idioma_id',
    ];


    public function idioma()
    {
        return $this->belongsTo(Idioma::class);
    }
}
