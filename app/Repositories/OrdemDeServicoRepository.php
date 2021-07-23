<?php

namespace App\Repositories;

use App\Models\OrdemDeServico;
use App\Repositories\BaseRepository;

/**
 * Class OrdemDeServicoRepository
 * @package App\Repositories
 * @version May 23, 2020, 8:52 pm UTC
*/

class OrdemDeServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'origem',
        'numero_de_poste',
        'numero_de_luminaria',
        'solicitante',
        'telefone_do_solicitante',
        'tipo_do_solicitante',
        'tipo_da_solictacao',
        'logradouro',
        'bairro',
        'vis_a_vis',
        'referencia',
        'tipo_do_logradouro',
        'nome_do_logradouro',
        'dados_complementares',
        'servico_solicitado',
        'protocolo_oficio'
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
        return OrdemDeServico::class;
    }
}
