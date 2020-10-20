<?php

namespace App\Repositories;

use App\Models\ipcontaip_14_dadosfatura;
use App\Repositories\BaseRepository;

/**
 * Class ipcontaip_14_dadosfaturaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class ipcontaip_14_dadosfaturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'tipo_reg',
        'cnpj',
        'cod_cliente',
        'cod_contrato',
        'num_medidor',
        'cod_multiservico',
        'num_doc_pag_coletiva',
        'num_fatura',
        'cod_conceito',
        'qtd_conceito',
        'preco_conceito',
        'sinal_do_valor_conceitos',
        'valor_final_com_imposto',
        'descricao_conceito',
        'contaipano',
        'contaipmes',
        'segmento'
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
        return ipcontaip_14_dadosfatura::class;
    }
}
