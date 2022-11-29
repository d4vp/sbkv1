<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bicicleta
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bicicleta extends Model
{
    
    static $rules = [
		
    'tamaño' => 'required',
    'n_serial' => 'required',
  
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tamaño','n_serial'];



}
