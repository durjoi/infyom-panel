<?php

namespace App\Repositories;

use App\Models\operacao;
use App\Repositories\BaseRepository;

/**
 * Class operacaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class operacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'operacao',
        'utilizacao',
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
        return operacao::class;
    }
}
