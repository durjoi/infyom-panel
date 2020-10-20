<?php

namespace App\DataTables;

use App\Models\ordemDeServico;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ordemDeServicoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ordem_de_servicos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ordemDeServico $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ordemDeServico $model)
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
            'origem' => new Column(['title' => __('models/ordemDeServicos.fields.origem'), 'data' => 'origem'])
,
            'numero_de_poste' => new Column(['title' => __('models/ordemDeServicos.fields.numero_de_poste'), 'data' => 'numero_de_poste'])
,
            'numero_de_luminaria' => new Column(['title' => __('models/ordemDeServicos.fields.numero_de_luminaria'), 'data' => 'numero_de_luminaria'])
,
            'solicitante' => new Column(['title' => __('models/ordemDeServicos.fields.solicitante'), 'data' => 'solicitante'])
,
            'telefone_do_solicitante' => new Column(['title' => __('models/ordemDeServicos.fields.telefone_do_solicitante'), 'data' => 'telefone_do_solicitante'])
,
            'tipo_do_solicitante' => new Column(['title' => __('models/ordemDeServicos.fields.tipo_do_solicitante'), 'data' => 'tipo_do_solicitante'])
,
            'tipo_da_solictacao' => new Column(['title' => __('models/ordemDeServicos.fields.tipo_da_solictacao'), 'data' => 'tipo_da_solictacao'])
,
            'logradouro' => new Column(['title' => __('models/ordemDeServicos.fields.logradouro'), 'data' => 'logradouro'])
,
            'bairro' => new Column(['title' => __('models/ordemDeServicos.fields.bairro'), 'data' => 'bairro'])
,
            'vis_a_vis' => new Column(['title' => __('models/ordemDeServicos.fields.vis_a_vis'), 'data' => 'vis_a_vis'])
,
            'referencia' => new Column(['title' => __('models/ordemDeServicos.fields.referencia'), 'data' => 'referencia'])
,
            'tipo_do_logradouro' => new Column(['title' => __('models/ordemDeServicos.fields.tipo_do_logradouro'), 'data' => 'tipo_do_logradouro'])
,
            'nome_do_logradouro' => new Column(['title' => __('models/ordemDeServicos.fields.nome_do_logradouro'), 'data' => 'nome_do_logradouro'])
,
            'dados_complementares' => new Column(['title' => __('models/ordemDeServicos.fields.dados_complementares'), 'data' => 'dados_complementares'])
,
            'servico_solicitado' => new Column(['title' => __('models/ordemDeServicos.fields.servico_solicitado'), 'data' => 'servico_solicitado'])
,
            'protocolo_oficio' => new Column(['title' => __('models/ordemDeServicos.fields.protocolo_oficio'), 'data' => 'protocolo_oficio'])
,
            'status' => new Column(['title' => __('models/ordemDeServicos.fields.status'), 'data' => 'status'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ordem_de_servicosdatatable_' . time();
    }
}
