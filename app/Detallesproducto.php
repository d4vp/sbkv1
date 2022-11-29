<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallesproducto
 *
 * @property $id
 * @property $name
 * @property $descripcion
 * @property $imagen
 * @property $talla
 * @property $marca
 * @property $color
 * @property $imageable_id
 * @property $imageable_type
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detallesproducto extends Model
{
    
    static $rules = [
		'name' => 'required',
		'descripcion' => 'required',
		'color' => 'required',
		'material' => 'required',
		'marca' => 'required',
    'modelo' => 'required',
		'imageable_id' => 'required',
		'imageable_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','descripcion','color','material','marca','modelo','imageable_id','imageable_type'];



}
