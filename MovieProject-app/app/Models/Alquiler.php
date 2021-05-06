<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alquiler
 *
 * @property $id
 * @property $FechaInicio
 * @property $FechaFinal
 * @property $IdPeliculaA
 * @property $IdUsuarioA
 *
 * @property Pelicula $pelicula
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alquiler extends Model
{
    
    static $rules = [
		'FechaInicio' => 'required',
		'FechaFinal' => 'required',
		'IdPeliculaA' => 'required',
		'IdUsuarioA' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['FechaInicio','FechaFinal','IdPeliculaA','IdUsuarioA'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pelicula()
    {
        return $this->hasOne('App\Models\Pelicula', 'id', 'IdPeliculaA');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'IdUsuario', 'IdUsuarioA');
    }
    

}
