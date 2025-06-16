<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{

    public function usuario() {
        return $this->hasManys(usuario::class);
    }
    
    public function productos()
{
    return $this->hasMany(\App\Models\Producto::class, 'ciudad_id');
}




    protected $table = "ciudades";

    protected $fillable =['nombre','estado'];
}
