<?php

namespace App\Repositories;

use App\Models\origem_solicitacao;
use App\Repositories\BaseRepository;

/**
 * Class origem_solicitacaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class origem_solicitacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'origemsolicitacao_codigo',
        'origemsolicitacao_descricao',
        'origemsolicitacao_descritivo',
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
        return origem_solicitacao::class;
    }
}
