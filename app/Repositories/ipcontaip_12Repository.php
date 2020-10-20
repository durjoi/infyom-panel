<?php

namespace App\Repositories;

use App\Models\ipcontaip_12;
use App\Repositories\BaseRepository;

/**
 * Class ipcontaip_12Repository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class ipcontaip_12Repository extends BaseRepository
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
        'num_cod_pag_cta_coletivo',
        'num_fatura',
        'codigo_instalacao',
        'cod_classe_subclasse',
        'cod_tarifa',
        'tensao_fornecimento',
        'data_fatura',
        'data_vencimento',
        'data_leit_anterior',
        'data_leit_atual',
        'tipo_fatura',
        'sinal_do_saldo_da_fatura',
        'saldo_da_fatura',
        'valor_do_icms',
        'base_calculo_icms',
        'aliquota_icms',
        'perda_transformacao',
        'fator_de_potencia',
        'valor_da_demanda_contratada',
        'valor_da_demanda_contratada_na_ponta',
        'valor_da_demanda_contratada_fora_de_ponta',
        'valor_do_pis_fatura',
        'valor_do_cofins_fatura'
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
        return ipcontaip_12::class;
    }
}
