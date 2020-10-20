<?php

namespace App\Repositories;

use App\Models\ipcontaip_secretarias;
use App\Repositories\BaseRepository;

/**
 * Class ipcontaip_secretariasRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class ipcontaip_secretariasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'secretaria_sigla',
        'secretaria_nome',
        'secretaria_tipo',
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
        return ipcontaip_secretarias::class;
    }
}
