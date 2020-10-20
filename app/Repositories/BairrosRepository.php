<?php

namespace App\Repositories;

use App\Models\Bairros;
use App\Repositories\BaseRepository;

/**
 * Class BairrosRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class BairrosRepository extends BaseRepository
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
        return Bairros::class;
    }
}
