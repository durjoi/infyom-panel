<?php

namespace App\Repositories;

use App\Models\perfil_cadastro;
use App\Repositories\BaseRepository;

/**
 * Class perfil_cadastroRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class perfil_cadastroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'modulo',
        'descricao',
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
        return perfil_cadastro::class;
    }
}
