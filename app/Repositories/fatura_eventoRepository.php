<?php

namespace App\Repositories;

use App\Models\fatura_evento;
use App\Repositories\BaseRepository;

/**
 * Class fatura_eventoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:02 am UTC
*/

class fatura_eventoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero',
        'ano',
        'aberta_em',
        'aberta_idusuario',
        'encaminhada_em',
        'encaminhada_idusuario',
        'pago_em',
        'pago_idusuario',
        'data_inicio',
        'data_termino',
        'titulo_relatorio',
        'id_cidade',
        'id_meses',
        'id_empresa'
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
        return fatura_evento::class;
    }
}
