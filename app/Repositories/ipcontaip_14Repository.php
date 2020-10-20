<?php

namespace App\Repositories;

use App\Models\ipcontaip_14;
use App\Repositories\BaseRepository;

/**
 * Class ipcontaip_14Repository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class ipcontaip_14Repository extends BaseRepository
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
        'cod_multiservico',
        'num_doc_pag_coletiva',
        'num_fatura',
        'cod_conceito',
        'qtd_conceito',
        'preco_conceito',
        'sinal_do_valor_conceitos',
        'valor_final_com_imposto',
        'descricao_conceito'
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
        return ipcontaip_14::class;
    }
}
