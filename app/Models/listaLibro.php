<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listaLibro extends Model
{
    use HasFactory;

    protected $table ='listas_libro';

       
    protected $fillable = [
        'fecha',
        'link_libro',
        'user_id',
        'libro_id'
        
    ];


}
