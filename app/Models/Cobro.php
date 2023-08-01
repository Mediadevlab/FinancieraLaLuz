<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cobro
 *
 * @property $id
 * @property $total_cobro
 * @property $fecha_cobro
 * @property $foto_comprobante
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cobro extends Model
{
    public $table = "Cobro";

    public function prestamos()
    {
      return $this->belongsTo(Prestamo::class, 'id_prestamo');
    } 

    static $rules = [
		'total_cobro' => 'required',
		'fecha_cobro' => 'required',
		'foto_comprobante' => 'required',
		'num_recibo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['total_cobro','fecha_cobro','foto_comprobante', 'num_recibo'];



}
