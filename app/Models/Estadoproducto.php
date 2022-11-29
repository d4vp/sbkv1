<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadoproducto extends Model
{
    use HasFactory;
    public function producto(){
        /* $estadoproducto = Estadoproducto::where('user_id', $this->id)->first(); */
     /*   $user = User::find($this->user_id); */
        return $this->belongsTo('App\Models\Producto'); 
    }
}
