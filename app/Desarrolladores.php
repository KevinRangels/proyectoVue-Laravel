<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desarrolladores extends Model
{
    protected $table = "desarrolladores";
    protected $fillable = array('nombre', 'apellido', 'edad', 'habilidades');
}
