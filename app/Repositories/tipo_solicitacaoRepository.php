<?php

namespace App\Repositories;

use App\Models\tipo_solicitacao;
use App\Repositories\BaseRepository;

/**
 * Class tipo_solicitacaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class tipo_solicitacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tiposolicitacao_descricao',
        'tiposolicitacao_aplicacao',
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
        return tipo_solicitacao::class;
    }
}
