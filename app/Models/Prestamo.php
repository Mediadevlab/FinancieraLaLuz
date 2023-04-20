<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $codigo
 * @property $tipo
 * @property $capital
 * @property $tipo_tasa
 * @property $cuota
 * @property $plazo
 * @property $forma_pago
 * @property $fecha_solicitud
 * @property $fecha_inicio
 * @property $fecha_fin
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
  public $table = "Prestamo";

  public function prendarios()
  {
    return $this->hasMany('App\Models\Prendario');
  }

  public function hipotecarios()
  {
    return $this->hasMany('App\Models\Hipotecario');
  }

  public function fiduciarios()
  {
    return $this->hasMany('App\Models\Fiduciario');
  }

  public function mypimes()
  {
    return $this->hasMany('App\Models\Mypime');
  }

  public function get_buscarCliente($dni)
  {
    $this->db->where('dni', $dni);
    return $this->db->get('cliente')->row();
  }
  

  static $rules = [
    'tipo' => 'required',
    'codigo' => 'required',
    'capital' => 'required',
    'tipo_tasa' => 'required',
    'cuota' => 'required',
    'interes' => 'required',
    'total' => 'required',
    'plazo' => 'required',
    'forma_pago' => 'required',
    'fecha_solicitud' => 'required',
    'fecha_inicio' => 'required',
    'fecha_fin' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['tipo', 'codigo', 'capital', 'tipo_tasa', 'cuota', 'interes', 'total', 'plazo', 'forma_pago', 'fecha_solicitud', 'fecha_inicio', 'fecha_fin'];
}
