<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voces;


class Idioma extends Model
{
    use HasFactory;

    protected $table ='idiomas';

    protected $fillable = [
        'nombre',
        'codigo'
    ];

    public function voces(){
        return $this->hasMany(Voces::class);
    }



}
