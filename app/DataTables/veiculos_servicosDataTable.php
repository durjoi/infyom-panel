<?php

namespace App\DataTables;

use App\Models\veiculos_servicos;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class veiculos_servicosDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'veiculos_servicos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\veiculos_servicos $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(veiculos_servicos $model)
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
            'idcidade' => new Column(['title' => __('models/veiculosServicos.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'idveiculos' => new Column(['title' => __('models/veiculosServicos.fields.idveiculos'), 'data' => 'veiculos.descricao'])
,
            'data_servico' => new Column(['title' => __('models/veiculosServicos.fields.data_servico'), 'data' => 'data_servico'])
,
            'descricao_servico' => new Column(['title' => __('models/veiculosServicos.fields.descricao_servico'), 'data' => 'descricao_servico'])
,
            'valor_total' => new Column(['title' => __('models/veiculosServicos.fields.valor_total'), 'data' => 'valor_total'])
,
            'incluidoem' => new Column(['title' => __('models/veiculosServicos.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuario' => new Column(['title' => __('models/veiculosServicos.fields.idusuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'veiculos_servicosdatatable_' . time();
    }
}
