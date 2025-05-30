<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
        public function producto(){
                return $this->belongsTo( producto:: class);
            }
        
            public function usuario(){
                return $this->belongsTo( usuario:: class);
            }
        protected $fillable =['decripcion','valoracion','estado','usuario_id','producto_id'];

}
