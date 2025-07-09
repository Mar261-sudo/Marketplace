<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    public function categoria(){
        return $this->belongsTo( categoria:: class);
    }
        
    public function ciudad(){
        return $this->belongsTo( ciudad:: class);
    }
    
    public function usuario()
{
    return $this->belongsTo(Usuario::class);
}

public function comentarios()
{
    return $this->hasMany(\App\Models\Comentario::class, 'producto_id');
}

    protected $fillable =['nombre','slug','decripcion','valor','imagen','estado','estado_producto','categoria_id','usuario_id','ciudad_id'];
}
