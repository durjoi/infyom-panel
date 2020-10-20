<?php

namespace App\Repositories;

use App\Models\solicitacao_reclamacao_solicitantes;
use App\Repositories\BaseRepository;

/**
 * Class solicitacao_reclamacao_solicitantesRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class solicitacao_reclamacao_solicitantesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idsolicitacaoreclamacao',
        'nome',
        'telefone',
        'email',
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
        return solicitacao_reclamacao_solicitantes::class;
    }
}
