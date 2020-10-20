<?php

namespace App\Repositories;

use App\Models\tipoacao;
use App\Repositories\BaseRepository;

/**
 * Class tipoacaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class tipoacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoacao_descricao',
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
        return tipoacao::class;
    }
}
