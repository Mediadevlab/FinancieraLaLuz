<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hipotecario
 *
 * @property $id
 * @property $nombre
 * @property $dni
 * @property $rtn
 * @property $tel_cel
 * @property $tel_casa
 * @property $tel_tra
 * @property $dir_casa
 * @property $dir_trabajo
 * @property $fecha_nac
 * @property $ciudad
 * @property $correo
 * @property $foto
 * @property $desc_inmueble
 * @property $dir_inmueble
 * @property $foto_inmueble
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hipotecario extends Model
{
    public $table = "Hipotecario";

	public function prestamo()
	{
		return $this->belongsTo('App\Models\Prestamo');
	}

    static $rules = [
		'nombre' => 'required',
		'dni' => 'required',
		'rtn' => 'required',
		'tel_cel' => 'required',
		'tel_casa' => 'required',
		'tel_tra' => 'required',
		'dir_casa' => 'required',
		'dir_trabajo' => 'required',
		'fecha_nac' => 'required',
		'ciudad' => 'required',
		'correo' => 'required',
		'foto' => 'required',
		'desc_inmueble' => 'required',
		'dir_inmueble' => 'required',
		'foto_inmueble' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','dni','rtn','tel_cel','tel_casa','tel_tra','dir_casa','dir_trabajo','fecha_nac','ciudad','correo','foto','desc_inmueble','dir_inmueble','foto_inmueble'];



}
