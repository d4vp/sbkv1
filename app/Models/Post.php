<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    use HasFactory;


    protected $fillable = ['descripcion','categoria_id'];
    public function user(){
        return $this->hasMany('App\Models\User');
    }
    public function categorias(){
        return $this->belongsToMany('App\Models\Categoria');
    }
    /* relacion one to one polimorphic */
    public function comments(){
        return $this->morphMany('App\Models\Categoria','commentable');
    }
    
   
}
