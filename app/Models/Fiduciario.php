<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fiduciario
 *
 * @property $id
 * @property $prestamo_id
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
 * @property $nombre_aval
 * @property $dni_aval
 * @property $rtn_aval
 * @property $tel_cel_aval
 * @property $tel_casa_aval
 * @property $tel_tra_aval
 * @property $dir_casa_aval
 * @property $dir_trabajo_aval
 * @property $fecha_nac_aval
 * @property $ciudad_aval
 * @property $correo_aval
 * @property $foto_aval
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fiduciario extends Model
{
	public $table = "Fiduciario";

	public function prestamo()
	{
		return $this->belongsTo('App\Models\Prestamo');
	}
    
    static $rules = [
		'prestamos_id' => 'required',
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
		'nombre_aval' => 'required',
		'dni_aval' => 'required',
		'rtn_aval' => 'required',
		'tel_cel_aval' => 'required',
		'tel_casa_aval' => 'required',
		'tel_tra_aval' => 'required',
		'dir_casa_aval' => 'required',
		'dir_trabajo_aval' => 'required',
		'fecha_nac_aval' => 'required',
		'ciudad_aval' => 'required',
		'correo_aval' => 'required',
		'foto_aval' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prestamo_id','nombre','dni','rtn','tel_cel','tel_casa','tel_tra','dir_casa','dir_trabajo','fecha_nac','ciudad','correo','foto','nombre_aval','dni_aval','rtn_aval','tel_cel_aval','tel_casa_aval','tel_tra_aval','dir_casa_aval','dir_trabajo_aval','fecha_nac_aval','ciudad_aval','correo_aval','foto_aval'];



}
