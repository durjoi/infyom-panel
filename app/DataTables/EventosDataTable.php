<?php

namespace App\DataTables;

use App\Models\Eventos;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class EventosDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'eventos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Eventos $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Eventos $model)
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
            'protocolo' => new Column(['title' => __('models/eventos.fields.protocolo'), 'data' => 'protocolo'])
,
            'data_solicitacao' => new Column(['title' => __('models/eventos.fields.data_solicitacao'), 'data' => 'data_solicitacao'])
,
            'solicitante' => new Column(['title' => __('models/eventos.fields.solicitante'), 'data' => 'solicitante'])
,
            'telefones' => new Column(['title' => __('models/eventos.fields.telefones'), 'data' => 'telefones'])
,
            'email' => new Column(['title' => __('models/eventos.fields.email'), 'data' => 'email'])
,
            'comumento_numero' => new Column(['title' => __('models/eventos.fields.comumento_numero'), 'data' => 'comumento_numero'])
,
            'documento_tipo' => new Column(['title' => __('models/eventos.fields.documento_tipo'), 'data' => 'documento_tipo'])
,
            'evento_descricao' => new Column(['title' => __('models/eventos.fields.evento_descricao'), 'data' => 'evento_descricao'])
,
            'data_inicio' => new Column(['title' => __('models/eventos.fields.data_inicio'), 'data' => 'data_inicio'])
,
            'data_termino' => new Column(['title' => __('models/eventos.fields.data_termino'), 'data' => 'data_termino'])
,
            'quantidade_dias' => new Column(['title' => __('models/eventos.fields.quantidade_dias'), 'data' => 'quantidade_dias'])
,
            'referencia' => new Column(['title' => __('models/eventos.fields.referencia'), 'data' => 'referencia'])
,
            'responsavel' => new Column(['title' => __('models/eventos.fields.responsavel'), 'data' => 'responsavel'])
,
            'telefones_responsavel' => new Column(['title' => __('models/eventos.fields.telefones_responsavel'), 'data' => 'telefones_responsavel'])
,
            'email_responsavel' => new Column(['title' => __('models/eventos.fields.email_responsavel'), 'data' => 'email_responsavel'])
,
            'observacao' => new Column(['title' => __('models/eventos.fields.observacao'), 'data' => 'observacao'])
,
            'situacao' => new Column(['title' => __('models/eventos.fields.situacao'), 'data' => 'situacao'])
,
            'enviado_impressao' => new Column(['title' => __('models/eventos.fields.enviado_impressao'), 'data' => 'enviado_impressao'])
,
            'enviado_mobile' => new Column(['title' => __('models/eventos.fields.enviado_mobile'), 'data' => 'enviado_mobile'])
,
            'enviado_mobile_id_turma' => new Column(['title' => __('models/eventos.fields.enviado_mobile_id_turma'), 'data' => 'enviado_mobile_turma.cabo_turma'])
,
            'c_informar_ciencia' => new Column(['title' => __('models/eventos.fields.c_informar_ciencia'), 'data' => 'c_informar_ciencia'])
,
            'c_informar_concluida' => new Column(['title' => __('models/eventos.fields.c_informar_concluida'), 'data' => 'c_informar_concluida'])
,
            'data_conclusao' => new Column(['title' => __('models/eventos.fields.data_conclusao'), 'data' => 'data_conclusao'])
,
            'data_baixa' => new Column(['title' => __('models/eventos.fields.data_baixa'), 'data' => 'data_baixa'])
,
            'dados_conclusivos' => new Column(['title' => __('models/eventos.fields.dados_conclusivos'), 'data' => 'dados_conclusivos'])
,
            'alterador_em' => new Column(['title' => __('models/eventos.fields.alterador_em'), 'data' => 'alterador_em'])
,
            'logradouro_descricao' => new Column(['title' => __('models/eventos.fields.logradouro_descricao'), 'data' => 'logradouro_descricao'])
,
            'tipo_evento' => new Column(['title' => __('models/eventos.fields.tipo_evento'), 'data' => 'tipo_evento'])
,
            'incluidodoem' => new Column(['title' => __('models/eventos.fields.incluidodoem'), 'data' => 'incluidodoem'])
,
            'id_tipo_solicitante' => new Column(['title' => __('models/eventos.fields.id_tipo_solicitante'), 'data' => 'tipo_solicitante.tiposolicitante_descricao'])
,
            'id_tipo_solicitacao' => new Column(['title' => __('models/eventos.fields.id_tipo_solicitacao'), 'data' => 'tipo_solicitacao.tiposolicitacao_descricao'])
,
            'id_logradouro' => new Column(['title' => __('models/eventos.fields.id_logradouro'), 'data' => 'logradouro.logradouro_descricao'])
,
            'id_bairro' => new Column(['title' => __('models/eventos.fields.id_bairro'), 'data' => 'bairro.bairro_descricao'])
,
            'id_empresa' => new Column(['title' => __('models/eventos.fields.id_empresa'), 'data' => 'empresa.empresa_nome'])
,
            'id_turma' => new Column(['title' => __('models/eventos.fields.id_turma'), 'data' => 'turma.cabo_turma'])
,
            'id_cidade' => new Column(['title' => __('models/eventos.fields.id_cidade'), 'data' => 'cidade.descricao'])
,
            'id_usuario' => new Column(['title' => __('models/eventos.fields.id_usuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'eventosdatatable_' . time();
    }
}
