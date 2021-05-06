<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelicula
 *
 * @property $id
 * @property $Nombre
 * @property $Descripcion
 * @property $Estado
 * @property $Stock
 * @property $PrecioAlquiler
 * @property $PrecioVenta
 * @property $Favorito
 * @property $updated_at
 * @property $created_at
 *
 * @property Alquiler[] $alquilers
 * @property Compra[] $compras
 * @property Multum[] $multas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pelicula extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Descripcion' => 'required',
		'Estado' => 'required',
		'Stock' => 'required',
		'PrecioAlquiler' => 'required',
		'PrecioVenta' => 'required',
		'Favorito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Descripcion','Estado','Stock','PrecioAlquiler','PrecioVenta','Favorito'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alquilers()
    {
        return $this->hasMany('App\Models\Alquiler', 'IdPeliculaA', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'IdPeliculaC', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function multas()
    {
        return $this->hasMany('App\Models\Multum', 'IdPeliculaM', 'id');
    }
    

}
