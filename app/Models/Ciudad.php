<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{

    public function usuario() {
        return $this->hasManys(usuario::class);
    }
    


    protected $table = "ciudades";

    protected $fillable =['nombre','estado'];
}
