<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reclamos
 * @package App\Models
 * @version November 19, 2018, 4:50 am UTC
 *
 * @property string Nombre
 * @property integer Documento
 * @property string Correo
 * @property string Direccion
 * @property integer Telefono
 * @property string Motivo
 */
class Reclamos extends Model
{
    use SoftDeletes;

    public $table = 'reclamos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombre',
        'Documento',
        'Correo',
        'Direccion',
        'Telefono',
        'Motivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre' => 'string',
        'Documento' => 'string',
        'Correo' => 'string',
        'Direccion' => 'string',
        'Telefono' => 'string',
        'Motivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Documento' => 'required|numeric',
        'Correo' => 'required|email',
        'Direccion' => 'required',
        'Telefono' => 'required|numeric',
        'Motivo' => 'required'
    ];

    
}
