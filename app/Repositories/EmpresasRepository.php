<?php

namespace App\Repositories;

use App\Models\Empresas;
use App\Repositories\BaseRepository;

/**
 * Class EmpresasRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class EmpresasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'empresa_nome',
        'empresa_descricao',
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
        return Empresas::class;
    }
}
