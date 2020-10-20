<?php

namespace App\Repositories;

use App\Models\tipo_solicitante;
use App\Repositories\BaseRepository;

/**
 * Class tipo_solicitanteRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class tipo_solicitanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tiposolicitante_descricao',
        'incluidoem',
        'idusuario'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tipo_solicitante::class;
    }
}
