<?php

namespace App\Repositories;

use App\Models\Controle_motivos;
use App\Repositories\BaseRepository;

/**
 * Class Controle_motivosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class Controle_motivosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'opcao',
        'descricao',
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
        return Controle_motivos::class;
    }
}
