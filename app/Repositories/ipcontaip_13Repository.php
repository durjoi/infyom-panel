<?php

namespace App\Repositories;

use App\Models\ipcontaip_13;
use App\Repositories\BaseRepository;

/**
 * Class ipcontaip_13Repository
 * @package App\Repositories
 * @version May 24, 2020, 8:59 am UTC
*/

class ipcontaip_13Repository extends BaseRepository
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
        'num_medidor',
        'descr_funcao_reduzida',
        'data_leit_anterior',
        'data_leit_atual',
        'leitura',
        'constante',
        'sinal_do_ajuste',
        'ajuste',
        'csu_dem_lida',
        'csu_dem_lida_com_ajuste',
        'descricao_funcao'
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
        return ipcontaip_13::class;
    }
}
