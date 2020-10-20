<?php

namespace App\Repositories;

use App\Models\Estoque_saida;
use App\Repositories\BaseRepository;

/**
 * Class Estoque_saidaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class Estoque_saidaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'solicitante',
        'autorizado_por',
        'actualizacao',
        'observacao',
        'incluidodoem',
        'id_operacao',
        'id_obras_estoque',
        'id_bairro',
        'id_turma',
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
        return Estoque_saida::class;
    }
}
