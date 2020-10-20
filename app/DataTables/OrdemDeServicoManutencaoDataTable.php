<?php

namespace App\DataTables;

use App\Models\OrdemDeServicoManutencao;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class OrdemDeServicoManutencaoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ordem_de_servico_manutencaos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\OrdemDeServicoManutencao $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(OrdemDeServicoManutencao $model)
    {
        return $model->newQuery();
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
            'protocolo' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.protocolo'), 'data' => 'protocolo'])
,
            'data_hora_registro' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.data_hora_registro'), 'data' => 'data_hora_registro'])
,
            'registrado_por' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.registrado_por'), 'data' => 'registrado_por'])
,
            'protocolo_oficio' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.protocolo_oficio'), 'data' => 'protocolo_oficio'])
,
            'tipo_do_solicitante' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.tipo_do_solicitante'), 'data' => 'tipo_do_solicitante'])
,
            'solicitante' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.solicitante'), 'data' => 'solicitante'])
,
            'telefone_do_solicitante' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.telefone_do_solicitante'), 'data' => 'telefone_do_solicitante'])
,
            'numero_de_poste' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.numero_de_poste'), 'data' => 'numero_de_poste'])
,
            'numero_de_luminaria' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.numero_de_luminaria'), 'data' => 'numero_de_luminaria'])
,
            'coordenada_x' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.coordenada_x'), 'data' => 'coordenada_x'])
,
            'coordenada_y' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.coordenada_y'), 'data' => 'coordenada_y'])
,
            'endereco_cadastro' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.endereco_cadastro'), 'data' => 'endereco_cadastro'])
,
            'vis_a_vis_cadastro' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.vis_a_vis_cadastro'), 'data' => 'vis_a_vis_cadastro'])
,
            'referencia_cadastro' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.referencia_cadastro'), 'data' => 'referencia_cadastro'])
,
            'endereco_fornecido' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.endereco_fornecido'), 'data' => 'endereco_fornecido'])
,
            'vis_a_vis_fornecido' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.vis_a_vis_fornecido'), 'data' => 'vis_a_vis_fornecido'])
,
            'referencia_fornecido' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.referencia_fornecido'), 'data' => 'referencia_fornecido'])
,
            'dados_complementares' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.dados_complementares'), 'data' => 'dados_complementares'])
,
            'servico_solicitado' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.servico_solicitado'), 'data' => 'servico_solicitado'])
,
            'braco' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.braco'), 'data' => 'braco'])
,
            'suporte' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.suporte'), 'data' => 'suporte'])
,
            'conector' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.conector'), 'data' => 'conector'])
,
            'luminaria' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.luminaria'), 'data' => 'luminaria'])
,
            'vs' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.vs'), 'data' => 'vs'])
,
            'lampada_mvw' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.lampada_mvw'), 'data' => 'lampada_mvw'])
,
            'mista' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.mista'), 'data' => 'mista'])
,
            'reator' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.reator'), 'data' => 'reator'])
,
            'tipo_reator' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.tipo_reator'), 'data' => 'tipo_reator'])
,
            'rele' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.rele'), 'data' => 'rele'])
,
            'base' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.base'), 'data' => 'base'])
,
            'manutencao_em_poste' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.manutencao_em_poste'), 'data' => 'manutencao_em_poste'])
,
            'manutencao_em_topo_de_poste' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.manutencao_em_topo_de_poste'), 'data' => 'manutencao_em_topo_de_poste'])
,
            'cabo_turma' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.cabo_turma'), 'data' => 'cabo_turma'])
,
            'supervisor' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.supervisor'), 'data' => 'supervisor'])
,
            'eletricista' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.eletricista'), 'data' => 'eletricista'])
,
            'executada_em' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.executada_em'), 'data' => 'executada_em'])
,
            'status' => new Column(['title' => __('models/ordemDeServicoManutencaos.fields.status'), 'data' => 'status'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ordem_de_servico_manutencaosdatatable_' . time();
    }
}
