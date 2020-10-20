<?php

namespace App\Repositories;

use App\Models\bairro;
use App\Repositories\BaseRepository;

/**
 * Class bairroRepository
 * @package App\Repositories
 * @version May 23, 2020, 7:04 am UTC
*/

class bairroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bairro_descricao',
        'incluidodoem',
        'id_cidade',
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
        return bairro::class;
    }
}
