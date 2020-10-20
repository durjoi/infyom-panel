<?php

namespace App\Repositories;

use App\Models\logradouro_tipo;
use App\Repositories\BaseRepository;

/**
 * Class logradouro_tipoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class logradouro_tipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'logradouro_tipo_descricao',
        'logradouro_tipo_abreviado',
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
        return logradouro_tipo::class;
    }
}
