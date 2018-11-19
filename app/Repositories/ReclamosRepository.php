<?php

namespace App\Repositories;

use App\Models\Reclamos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReclamosRepository
 * @package App\Repositories
 * @version November 19, 2018, 4:50 am UTC
 *
 * @method Reclamos findWithoutFail($id, $columns = ['*'])
 * @method Reclamos find($id, $columns = ['*'])
 * @method Reclamos first($columns = ['*'])
*/
class ReclamosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Documento',
        'Correo',
        'Direccion',
        'Telefono',
        'Motivo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Reclamos::class;
    }
}
