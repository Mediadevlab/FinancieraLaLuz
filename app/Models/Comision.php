<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comision
 *
 * @property $id
 * @property $pago
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comision extends Model
{
  public $table = "Comision";
    
    static $rules = [
		'pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pago'];



}
