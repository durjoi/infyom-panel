<?php

namespace App\Repositories;

use App\Models\Fatura_manutencao;
use App\Repositories\BaseRepository;

/**
 * Class Fatura_manutencaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class Fatura_manutencaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero',
        'ano',
        'situacao',
        'aberta_em',
        'aberta_id_usuario',
        'encaminhada_em',
        'encaminhada_id_usuario',
        'pago_em',
        'pago_id_usuario',
        'data_inicio',
        'data_termino',
        'id_cidade',
        'id_empresa',
        'id_meses'
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
        return Fatura_manutencao::class;
    }
}
