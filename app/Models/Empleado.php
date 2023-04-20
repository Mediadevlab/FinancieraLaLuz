<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $nombre
 * @property $dni
 * @property $cargo
 * @property $direccion
 * @property $telefono
 * @property $estatus
 * @property $foto_emp
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    public $table = "Empleado";
    
    static $rules = [
		'nombre' => 'required',
		'dni' => 'required',
		'cargo' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'estatus' => 'required',
		'foto_emp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','dni','cargo','direccion','telefono','estatus', 'foto_emp'];



}
