<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;


    protected $guarded=[];
    protected $fillable = [
        'nombre', 'descripcion', 'precio','urlfoto'
    ];

    
    //relationship one to many (reverse)
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    //Relationship one to one polimorphic
    public function comments(){
        return $this->morphMany('App\Models\Categoria','commentable');
    }
    public function detallesproducto(){
        return $this->morphOne('App\Models\Detallesproducto','imageable');
    }
    public function estadoproducto(){
        return $this->hasOne('App\Models\Estadoproducto');
    }

    public function imagen(){
        return $this->morphOne('App\Imagen','imageable');}
    
}


