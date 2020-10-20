<?php

namespace App\DataTables;

use App\Models\solicitacao_reclamacao;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class solicitacao_reclamacaoDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'solicitacao_reclamacaos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\solicitacao_reclamacao $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(solicitacao_reclamacao $model)
    {
        if(method_exists($model, 'relationsName') && count($model->relationsName()) > 0){
            return $model->newQuery()->with($model->relationsName());
        }
        else {
            return $model->newQuery();
        }
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('crud.action')])
            ->parameters([
                'scrollX' => true,
                'stateLoaded' => 'function (settings, data) { $.fn.dataTable.ext.errMode = \'none\'; }',
                'responsive' => true,
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    [
                       'extend' => 'export',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-download"></i> ' .__('auth.app.export').''
                    ],
                    [
                       'extend' => 'print',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-print"></i> ' .__('auth.app.print').''
                    ],
                    [
                       'extend' => 'reload',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-refresh"></i> ' .__('auth.app.reload').''
                    ],
                ],
                 'language' => [
                   'url' => url('//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json'),
                 ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'idcidade' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'protocolo_sistema' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.protocolo_sistema'), 'data' => 'protocolo_sistema'])
,
            'protocolo_falasalvador' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.protocolo_falasalvador'), 'data' => 'protocolo_falasalvador'])
,
            'protocolo_consorcio' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.protocolo_consorcio'), 'data' => 'protocolo_consorcio'])
,
            'data_atendimento' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.data_atendimento'), 'data' => 'data_atendimento'])
,
            'hora_atendimento' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.hora_atendimento'), 'data' => 'hora_atendimento'])
,
            'horaregistro' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.horaregistro'), 'data' => 'horaregistro'])
,
            'temporegistro' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.temporegistro'), 'data' => 'temporegistro'])
,
            'solicitante_nome' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.solicitante_nome'), 'data' => 'solicitante_nome'])
,
            'solicitante_telefone' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.solicitante_telefone'), 'data' => 'solicitante_telefone'])
,
            'solicitante_email' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.solicitante_email'), 'data' => 'solicitante_email'])
,
            'poste_numero' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.poste_numero'), 'data' => 'poste_numero'])
,
            'luminaria_numero' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.luminaria_numero'), 'data' => 'luminaria_numero'])
,
            'idtiposolicitante' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idtiposolicitante'), 'data' => 'tiposolicitante.tiposolicitante_descricao'])
,
            'idtiposolicitacao' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idtiposolicitacao'), 'data' => 'tiposolicitacao.tiposolicitacao_descricao'])
,
            'idlogradouro_cadastro' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idlogradouro_cadastro'), 'data' => 'logradouro_cadastro.logradouro_descricao'])
,
            'idbairro_cadastro' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idbairro_cadastro'), 'data' => 'bairro_cadastro.bairro_descricao'])
,
            'visavis_cadastro' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.visavis_cadastro'), 'data' => 'visavis_cadastro'])
,
            'referencia_cadastro' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.referencia_cadastro'), 'data' => 'referencia_cadastro'])
,
            'idlogradourotipo_informado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idlogradourotipo_informado'), 'data' => 'logradourotipo_informado.logradouro_tipo_descricao'])
,
            'logradouro_descricao_informado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.logradouro_descricao_informado'), 'data' => 'logradouro_descricao_informado'])
,
            'idbairro_informado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idbairro_informado'), 'data' => 'bairro_informado.bairro_descricao'])
,
            'visavis_informado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.visavis_informado'), 'data' => 'visavis_informado'])
,
            'referencia_informado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.referencia_informado'), 'data' => 'referencia_informado'])
,
            'dadoscomplementares' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.dadoscomplementares'), 'data' => 'dadoscomplementares'])
,
            'servicosolicitado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.servicosolicitado'), 'data' => 'servicosolicitado'])
,
            'incluidoem' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuario' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idusuario'), 'data' => 'usuario.nome'])
,
            'idempresa' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idempresa'), 'data' => 'empresa.empresa_nome'])
,
            'enviado_impressao' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.enviado_impressao'), 'data' => 'enviado_impressao'])
,
            'enviado_mobile' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.enviado_mobile'), 'data' => 'enviado_mobile'])
,
            'enviado_mobile_idturma' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.enviado_mobile_idturma'), 'data' => 'enviado_mobile_turma.cabo_turma'])
,
            'data_execucao' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.data_execucao'), 'data' => 'data_execucao'])
,
            'hora_execucao' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.hora_execucao'), 'data' => 'hora_execucao'])
,
            'data_baixa' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.data_baixa'), 'data' => 'data_baixa'])
,
            'hora_baixa' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.hora_baixa'), 'data' => 'hora_baixa'])
,
            'acao_adotada' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.acao_adotada'), 'data' => 'acao_adotada'])
,
            'servico_realizado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.servico_realizado'), 'data' => 'servico_realizado'])
,
            'poste_numero_executado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.poste_numero_executado'), 'data' => 'poste_numero_executado'])
,
            'luminaria_numero_executado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.luminaria_numero_executado'), 'data' => 'luminaria_numero_executado'])
,
            'iddefeitoencontrado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.iddefeitoencontrado'), 'data' => 'defeitoencontrado.defeito_encontrato_descricao'])
,
            'idcausadefeito' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idcausadefeito'), 'data' => 'causadefeito.causa_defeito_descricao'])
,
            'idturma' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idturma'), 'data' => 'turma.cabo_turma'])
,
            'alterador_em' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.alterador_em'), 'data' => 'alterador_em'])
,
            'idusuarioalterou' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idusuarioalterou'), 'data' => 'usuarioalterou.nome'])
,
            'sfs_informar_ciencia' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.sfs_informar_ciencia'), 'data' => 'sfs_informar_ciencia'])
,
            'c_informar_ciencia' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.c_informar_ciencia'), 'data' => 'c_informar_ciencia'])
,
            'c_informar_concluida' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.c_informar_concluida'), 'data' => 'c_informar_concluida'])
,
            'sfs_informar_concluida' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.sfs_informar_concluida'), 'data' => 'sfs_informar_concluida'])
,
            'idfatura' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.idfatura'), 'data' => 'idfatura'])
,
            'tma_dias' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.tma_dias'), 'data' => 'tma_dias'])
,
            'tma_horas' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.tma_horas'), 'data' => 'tma_horas'])
,
            'referencia_poste_executado' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.referencia_poste_executado'), 'data' => 'referencia_poste_executado'])
,
            'tipo_acao' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.tipo_acao'), 'data' => 'tipo_acao'])
,
            'motivo_acao' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.motivo_acao'), 'data' => 'motivo_acao'])
,
            'garantia' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.garantia'), 'data' => 'garantia'])
,
            'garantia_os_anterior' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.garantia_os_anterior'), 'data' => 'garantia_os_anterior'])
,
            'supervisor' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.supervisor'), 'data' => 'supervisor'])
,
            'motivo_atraso' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.motivo_atraso'), 'data' => 'motivo_atraso'])
,
            'app_coordenada_x' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.app_coordenada_x'), 'data' => 'app_coordenada_x'])
,
            'app_coordenada_y' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.app_coordenada_y'), 'data' => 'app_coordenada_y'])
,
            'app_informacoes_gerais' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.app_informacoes_gerais'), 'data' => 'app_informacoes_gerais'])
,
            'controle_idturma' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.controle_idturma'), 'data' => 'controle_turma.cabo_turma'])
,
            'controle_data_entrega' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.controle_data_entrega'), 'data' => 'controle_data_entrega'])
,
            'controle_data_recebido' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.controle_data_recebido'), 'data' => 'controle_data_recebido'])
,
            'controle_acao' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.controle_acao'), 'data' => 'controle_acao'])
,
            'controle_idmotivo' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.controle_idmotivo'), 'data' => 'controle_motivo.descricao'])
,
            'impressoem' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.impressoem'), 'data' => 'impressoem'])
,
            'impressopor' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.impressopor'), 'data' => 'impressopor'])
,
            'os_separada_em' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.os_separada_em'), 'data' => 'os_separada_em'])
,
            'os_separada_por' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.os_separada_por'), 'data' => 'os_separada_por'])
,
            'os_separada_para' => new Column(['title' => __('models/solicitacaoReclamacaos.fields.os_separada_para'), 'data' => 'os_separada_para'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'solicitacao_reclamacaosdatatable_' . time();
    }
}
