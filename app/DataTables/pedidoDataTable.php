<?php

namespace App\DataTables;

use App\Models\pedido;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class pedidoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'pedidos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\pedido $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(pedido $model)
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
            'idcidade' => new Column(['title' => __('models/pedidos.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'idpedidocabecalho' => new Column(['title' => __('models/pedidos.fields.idpedidocabecalho'), 'data' => 'idpedidocabecalho'])
,
            'data_pedido' => new Column(['title' => __('models/pedidos.fields.data_pedido'), 'data' => 'data_pedido'])
,
            'idobrasestoque' => new Column(['title' => __('models/pedidos.fields.idobrasestoque'), 'data' => 'obrasestoque.obras_estoque_descricao'])
,
            'pedido_encaminhado' => new Column(['title' => __('models/pedidos.fields.pedido_encaminhado'), 'data' => 'pedido_encaminhado'])
,
            'pedido_encaminhado_data' => new Column(['title' => __('models/pedidos.fields.pedido_encaminhado_data'), 'data' => 'pedido_encaminhado_data'])
,
            'pedido_encaminhado_observacao' => new Column(['title' => __('models/pedidos.fields.pedido_encaminhado_observacao'), 'data' => 'pedido_encaminhado_observacao'])
,
            'pedido_fechado' => new Column(['title' => __('models/pedidos.fields.pedido_fechado'), 'data' => 'pedido_fechado'])
,
            'pedido_fechado_data' => new Column(['title' => __('models/pedidos.fields.pedido_fechado_data'), 'data' => 'pedido_fechado_data'])
,
            'pedido_fechado_observacao' => new Column(['title' => __('models/pedidos.fields.pedido_fechado_observacao'), 'data' => 'pedido_fechado_observacao'])
,
            'incluidoem' => new Column(['title' => __('models/pedidos.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuario' => new Column(['title' => __('models/pedidos.fields.idusuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pedidosdatatable_' . time();
    }
}
