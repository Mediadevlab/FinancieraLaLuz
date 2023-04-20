<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mypime
 *
 * @property $id
 * @property $nombre
 * @property $dni
 * @property $rtn
 * @property $tel_cel
 * @property $tel_casa
 * @property $tel_tra
 * @property $dir_casa
 * @property $dir_mypime
 * @property $fecha_nac
 * @property $ciudad
 * @property $correo
 * @property $foto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mypime extends Model
{
	public $table = "Mypime";

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
		'dir_mypime' => 'required',
		'fecha_nac' => 'required',
		'ciudad' => 'required',
		'correo' => 'required',
		'foto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','dni','rtn','tel_cel','tel_casa','tel_tra','dir_casa','dir_mypime','fecha_nac','ciudad','correo','foto'];



}
