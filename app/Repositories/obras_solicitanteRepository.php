<?php

namespace App\Repositories;

use App\Models\obras_solicitante;
use App\Repositories\BaseRepository;

/**
 * Class obras_solicitanteRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class obras_solicitanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idobras',
        'solicitante_nome',
        'solicitante_telefone',
        'solicitante_email',
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
        return obras_solicitante::class;
    }
}
