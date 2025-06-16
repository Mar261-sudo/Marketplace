<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }
    public function productos() {
        return $this->hasMany(Producto::class);
    }


    use HasFactory;
    protected $fillable =['nombre','movil','email','password','rol','estado','ciudad_id'];

}
