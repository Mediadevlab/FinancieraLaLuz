<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prendario
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
 * @property $desc_vehiculo
 * @property $placa
 * @property $color
 * @property $modelo
 * @property $marca
 * @property $anio
 * @property $documentacion
 * @property $foto_vehiculo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prendario extends Model
{
	public $table = "Prendario";

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
		'desc_vehiculo' => 'required',
		'placa' => 'required',
		'color' => 'required',
		'modelo' => 'required',
		'marca' => 'required',
		'anio' => 'required',
		'documentacion' => 'required',
		'foto_vehiculo' => 'required',
	];

	protected $perPage = 20;

	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'dni', 'rtn', 'tel_cel', 'tel_casa', 'tel_tra', 'dir_casa', 'dir_trabajo', 'fecha_nac', 'ciudad', 'correo', 'foto', 'desc_vehiculo', 'placa', 'color', 'modelo', 'marca', 'anio', 'documentacion', 'foto_vehiculo'];
}
