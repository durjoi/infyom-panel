<?php

namespace App\Repositories;

use App\Models\ordemDeServico;
use App\Repositories\BaseRepository;

/**
 * Class ordemDeServicoRepository
 * @package App\Repositories
 * @version May 26, 2020, 5:43 pm UTC
*/

class ordemDeServicoRepository extends BaseRepository
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
        'protocolo_oficio',
        'status'
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
        return ordemDeServico::class;
    }
}
