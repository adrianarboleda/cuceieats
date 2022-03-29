<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $categoría
 * @property $vegano
 * @property $vegetariano
 * @property $id_tienda
 * @property $deshabilitado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio' => 'required',
		'categoría' => 'required',
		'vegano' => 'required',
		'vegetariano' => 'required',
		'id_tienda' => 'required',
		'deshabilitado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','precio','categoría','vegano','vegetariano','id_tienda','deshabilitado'];



}
