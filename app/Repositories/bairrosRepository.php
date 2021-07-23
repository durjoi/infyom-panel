<?php

namespace App\Repositories;

use App\Models\bairros;
use App\Repositories\BaseRepository;

/**
 * Class bairrosRepository
 * @package App\Repositories
 * @version May 23, 2020, 5:48 am UTC
*/

class bairrosRepository extends BaseRepository
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
        return bairros::class;
    }
}
