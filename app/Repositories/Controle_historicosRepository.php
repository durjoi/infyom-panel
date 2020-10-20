<?php

namespace App\Repositories;

use App\Models\Controle_historicos;
use App\Repositories\BaseRepository;

/**
 * Class Controle_historicosRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class Controle_historicosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao',
        'id_solicitacao_reclamacao',
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
        return Controle_historicos::class;
    }
}
