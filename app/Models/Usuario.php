<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    public function ciudad() {
        return $this->belongsTo(Ciudad::class);
    }
    public function productos() {
        return $this->hasMany(Producto::class);
    }


    use HasFactory;
    protected $fillable =['nombre','movil','email','password','rol','estado','ciudad_id'];

    protected $hidden = ['password', 'remember_token'];

}
