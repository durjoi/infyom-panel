<?php

namespace App\Repositories;

use App\Models\Aplicacaos;
use App\Repositories\BaseRepository;

/**
 * Class AplicacaosRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class AplicacaosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'aplicacao_descricao',
        'registradoem',
        'id_usuario'
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
        return Aplicacaos::class;
    }
}
