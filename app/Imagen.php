<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagen
 *
 * @property $id
 * @property $url
 * @property $imageable_id
 * @property $imageable_type
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Imagen extends Model
{
    
    static $rules = [
		'url' => 'required',
		'imageable_id' => 'required',
		'imageable_type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['url','imageable_id','imageable_type'];



}
