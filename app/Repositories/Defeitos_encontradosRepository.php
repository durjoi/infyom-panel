<?php

namespace App\Repositories;

use App\Models\Defeitos_encontrados;
use App\Repositories\BaseRepository;

/**
 * Class Defeitos_encontradosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class Defeitos_encontradosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'defeito_encontrato_descricao',
        'incluidodoem',
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
        return Defeitos_encontrados::class;
    }
}
