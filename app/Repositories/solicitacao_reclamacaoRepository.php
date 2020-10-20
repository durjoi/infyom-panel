<?php

namespace App\Repositories;

use App\Models\solicitacao_reclamacao;
use App\Repositories\BaseRepository;

/**
 * Class solicitacao_reclamacaoRepository
 * @package App\Repositories
 * @version May 24, 2020, 9:01 am UTC
*/

class solicitacao_reclamacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcidade',
        'protocolo_sistema',
        'protocolo_falasalvador',
        'protocolo_consorcio',
        'data_atendimento',
        'hora_atendimento',
        'horaregistro',
        'temporegistro',
        'solicitante_nome',
        'solicitante_telefone',
        'solicitante_email',
        'poste_numero',
        'luminaria_numero',
        'idtiposolicitante',
        'idtiposolicitacao',
        'idlogradouro_cadastro',
        'idbairro_cadastro',
        'visavis_cadastro',
        'referencia_cadastro',
        'idlogradourotipo_informado',
        'logradouro_descricao_informado',
        'idbairro_informado',
        'visavis_informado',
        'referencia_informado',
        'dadoscomplementares',
        'servicosolicitado',
        'incluidoem',
        'idusuario',
        'idempresa',
        'enviado_impressao',
        'enviado_mobile',
        'enviado_mobile_idturma',
        'data_execucao',
        'hora_execucao',
        'data_baixa',
        'hora_baixa',
        'acao_adotada',
        'servico_realizado',
        'poste_numero_executado',
        'luminaria_numero_executado',
        'iddefeitoencontrado',
        'idcausadefeito',
        'idturma',
        'alterador_em',
        'idusuarioalterou',
        'sfs_informar_ciencia',
        'c_informar_ciencia',
        'c_informar_concluida',
        'sfs_informar_concluida',
        'idfatura',
        'tma_dias',
        'tma_horas',
        'referencia_poste_executado',
        'tipo_acao',
        'motivo_acao',
        'garantia',
        'garantia_os_anterior',
        'supervisor',
        'motivo_atraso',
        'app_coordenada_x',
        'app_coordenada_y',
        'app_informacoes_gerais',
        'controle_idturma',
        'controle_data_entrega',
        'controle_data_recebido',
        'controle_acao',
        'controle_idmotivo',
        'impressoem',
        'impressopor',
        'os_separada_em',
        'os_separada_por',
        'os_separada_para'
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
        return solicitacao_reclamacao::class;
    }
}
