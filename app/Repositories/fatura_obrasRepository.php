<?php

namespace App\Repositories;

use App\Models\fatura_obras;
use App\Repositories\BaseRepository;

/**
 * Class fatura_obrasRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:03 am UTC
*/

class fatura_obrasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'idempresa',
        'numero',
        'idmeses',
        'ano',
        'situacao',
        'aberta_em',
        'aberta_idusuario',
        'encaminhada_em',
        'encaminhada_idusuario',
        'pago_em',
        'pago_idusuario',
        'data_inicio',
        'data_termino',
        'titulo_relatorio'
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
        return fatura_obras::class;
    }
}
