<?php

namespace App\DataTables;

use App\Models\obras;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class obrasDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'obras.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\obras $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(obras $model)
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
            'idcidade' => new Column(['title' => __('models/obras.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'protocolo' => new Column(['title' => __('models/obras.fields.protocolo'), 'data' => 'protocolo'])
,
            'numero_processo' => new Column(['title' => __('models/obras.fields.numero_processo'), 'data' => 'numero_processo'])
,
            'data_processo' => new Column(['title' => __('models/obras.fields.data_processo'), 'data' => 'data_processo'])
,
            'idtiposolicitante' => new Column(['title' => __('models/obras.fields.idtiposolicitante'), 'data' => 'tiposolicitante.tiposolicitante_descricao'])
,
            'idtiposolicitacao' => new Column(['title' => __('models/obras.fields.idtiposolicitacao'), 'data' => 'tiposolicitacao.tiposolicitacao_descricao'])
,
            'solicitante' => new Column(['title' => __('models/obras.fields.solicitante'), 'data' => 'solicitante'])
,
            'telefones' => new Column(['title' => __('models/obras.fields.telefones'), 'data' => 'telefones'])
,
            'email' => new Column(['title' => __('models/obras.fields.email'), 'data' => 'email'])
,
            'idra' => new Column(['title' => __('models/obras.fields.idra'), 'data' => 'ra.ra_descricao'])
,
            'idlogradouro' => new Column(['title' => __('models/obras.fields.idlogradouro'), 'data' => 'logradouro.logradouro_descricao'])
,
            'idbairro' => new Column(['title' => __('models/obras.fields.idbairro'), 'data' => 'bairro.bairro_descricao'])
,
            'idtipoacao' => new Column(['title' => __('models/obras.fields.idtipoacao'), 'data' => 'tipoacao.tipoacao_descricao'])
,
            'servico_solicitado' => new Column(['title' => __('models/obras.fields.servico_solicitado'), 'data' => 'servico_solicitado'])
,
            'situacao' => new Column(['title' => __('models/obras.fields.situacao'), 'data' => 'situacao'])
,
            'incluidoem' => new Column(['title' => __('models/obras.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuario' => new Column(['title' => __('models/obras.fields.idusuario'), 'data' => 'usuario.nome'])
,
            'enviado_impressao' => new Column(['title' => __('models/obras.fields.enviado_impressao'), 'data' => 'enviado_impressao'])
,
            'enviado_mobile' => new Column(['title' => __('models/obras.fields.enviado_mobile'), 'data' => 'enviado_mobile'])
,
            'enviado_mobile_idturma' => new Column(['title' => __('models/obras.fields.enviado_mobile_idturma'), 'data' => 'enviado_mobile_turma.cabo_turma'])
,
            'referencia' => new Column(['title' => __('models/obras.fields.referencia'), 'data' => 'referencia'])
,
            'observacao' => new Column(['title' => __('models/obras.fields.observacao'), 'data' => 'observacao'])
,
            'telefone_contato' => new Column(['title' => __('models/obras.fields.telefone_contato'), 'data' => 'telefone_contato'])
,
            'idempresa' => new Column(['title' => __('models/obras.fields.idempresa'), 'data' => 'empresa.empresa_nome'])
,
            'data_prevista_inicial' => new Column(['title' => __('models/obras.fields.data_prevista_inicial'), 'data' => 'data_prevista_inicial'])
,
            'data_prevista_final' => new Column(['title' => __('models/obras.fields.data_prevista_final'), 'data' => 'data_prevista_final'])
,
            'fiscal_prefeitura' => new Column(['title' => __('models/obras.fields.fiscal_prefeitura'), 'data' => 'fiscal_prefeitura'])
,
            'art_obra' => new Column(['title' => __('models/obras.fields.art_obra'), 'data' => 'art_obra'])
,
            'c_informar_ciencia' => new Column(['title' => __('models/obras.fields.c_informar_ciencia'), 'data' => 'c_informar_ciencia'])
,
            'c_informar_concluida' => new Column(['title' => __('models/obras.fields.c_informar_concluida'), 'data' => 'c_informar_concluida'])
,
            'data_execucao' => new Column(['title' => __('models/obras.fields.data_execucao'), 'data' => 'data_execucao'])
,
            'hora_execucao' => new Column(['title' => __('models/obras.fields.hora_execucao'), 'data' => 'hora_execucao'])
,
            'data_baixa' => new Column(['title' => __('models/obras.fields.data_baixa'), 'data' => 'data_baixa'])
,
            'hora_baixa' => new Column(['title' => __('models/obras.fields.hora_baixa'), 'data' => 'hora_baixa'])
,
            'idturma' => new Column(['title' => __('models/obras.fields.idturma'), 'data' => 'turma.cabo_turma'])
,
            'alterador_em' => new Column(['title' => __('models/obras.fields.alterador_em'), 'data' => 'alterador_em'])
,
            'idusuarioalterou' => new Column(['title' => __('models/obras.fields.idusuarioalterou'), 'data' => 'usuarioalterou.nome'])
,
            'logradouro_descricao' => new Column(['title' => __('models/obras.fields.logradouro_descricao'), 'data' => 'logradouro_descricao'])
,
            'observacao_fatura' => new Column(['title' => __('models/obras.fields.observacao_fatura'), 'data' => 'observacao_fatura'])
,
            'complemento_turma' => new Column(['title' => __('models/obras.fields.complemento_turma'), 'data' => 'complemento_turma'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'obrasdatatable_' . time();
    }
}
