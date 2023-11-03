<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class usuario extends Model
{
    use HasFactory;

    public function persona(): HasOne
    {
        return $this->hasOne(Persona::class,'id_persona');
    }
    public function rol(): HasOne
    {
        return $this->hasOne(Rol::class,'id_Rol');
    }


}
