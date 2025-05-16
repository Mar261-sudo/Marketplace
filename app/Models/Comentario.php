<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
        protected $fillable =['decripcion','valoracion','estado','usuario_id','producto_id'];

}
