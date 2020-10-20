<?php

namespace App\Repositories;

use App\Models\subestacao;
use App\Repositories\BaseRepository;

/**
 * Class subestacaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class subestacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'subestacao',
        'transformador',
        'instalacao',
        'barramento',
        'bairro',
        'tensao_secundaria',
        'fases',
        'kvan',
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
        return subestacao::class;
    }
}
