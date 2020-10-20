<?php

namespace App\Repositories;

use App\Models\ipcontaip_medida;
use App\Repositories\BaseRepository;

/**
 * Class ipcontaip_medidaRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:00 am UTC
*/

class ipcontaip_medidaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'nome_concessionaria',
        'nome',
        'compl_nome',
        'idsecretaria',
        'num_fatura',
        'data_vencimento',
        'endereco_rua_av',
        'endereco_compl',
        'endereco_bairro',
        'endereco_municipio_uf_cep',
        'cod_contrato',
        'num_medidor',
        'data_leit_anterior',
        'data_leit_atual',
        'leitura_anterior',
        'leitura_atual',
        'qtd_conceito',
        'diferenca_leituras',
        'constante',
        'consumo',
        'tensao_fornecimento',
        'multa',
        'juros',
        'outros',
        'variacao_percentual',
        'tipo_fatura',
        'cod_tarifa',
        'preco_conceito',
        'valor_final_com_imposto',
        'valor_a_ser_faturado',
        'contaipano',
        'contaipmes',
        'contaipdatainclusao',
        'idusuario',
        'novo_contrato_cadastrado',
        'pagamento',
        'versao_mobile',
        'segmento',
        'unidade_fiscalizada',
        'unidade_fiscalizada_data',
        'unidade_fiscalizada_parecer',
        'unidade_fiscalizada_observacao',
        'fatura_numero',
        'fatura_mes',
        'fatura_ano',
        'idfollowup',
        'conta_entregue_fisicamente',
        'status_conta_fisica'
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
        return ipcontaip_medida::class;
    }
}
