<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    
        public function producto(){
                return $this->belongsTo( producto:: class);
            }
        
            public function usuario(): mixed{
                    return $this->belongsTo(\App\Models\Usuario::class, 'usuario_id');

            }


        protected $fillable =['decripcion','valoracion','estado','usuario_id','producto_id'];

}
