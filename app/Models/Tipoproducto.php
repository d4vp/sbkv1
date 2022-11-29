<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoproducto extends Model
{
    use HasFactory;
    public function producto(){
        /* $estadoproducto = Estadoproducto::where('user_id', $this->id)->first(); */
        return $this->hasOne('App\Models\Producto');
    }
}
