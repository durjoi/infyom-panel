<?php

namespace App\Repositories;

use App\Models\perfil;
use App\Repositories\BaseRepository;

/**
 * Class perfilRepository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class perfilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idusuario',
        'idperfilcadastro',
        'incluidoem',
        'idusuario_incluido'
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
        return perfil::class;
    }
}
