<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre
 * @property $fechaNac
 * @property $dni
 * @property $rtn
 * @property $telefono
 * @property $trabajo
 * @property $tel_trabajo
 * @property $direccion
 * @property $dir_trabajo
 * @property $correo
 * @property $nom_aval
 * @property $dni_aval
 * @property $rtn_aval
 * @property $dir_aval
 * @property $dirTrabajo_aval
 * @property $telTrabajo_aval
 * @property $telCasa_aval
 * @property $fechaNac_aval
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
	public $table = "Cliente";
    
    static $rules = [
		'nombre' => 'required',
		'fechaNac' => 'required',
		'dni' => 'required',
		'rtn' => 'required',
		'telefono' => 'required',
		'trabajo' => 'required',
		'tel_trabajo' => 'required',
		'direccion' => 'required',
		'dir_trabajo' => 'required',
		'correo' => 'required',
		'estado' => 'required',
		'nom_aval' => 'required',
		'dni_aval' => 'required',
		'rtn_aval' => 'required',
		'dir_aval' => 'required',
		'dirTrabajo_aval' => 'required',
		'telTrabajo_aval' => 'required',
		'telCasa_aval' => 'required',
		'fechaNac_aval' => 'required',
		'croquis_casa' => 'required',
		'croquis_trabajo' => 'required',
		'foto_cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','fechaNac','dni','rtn','telefono','trabajo','tel_trabajo','direccion',
	'dir_trabajo','correo','estado','nom_aval','dni_aval','rtn_aval','dir_aval','dirTrabajo_aval',
	'telTrabajo_aval','telCasa_aval','fechaNac_aval','croquis_casa','croquis_trabajo','foto_cliente'];



}
