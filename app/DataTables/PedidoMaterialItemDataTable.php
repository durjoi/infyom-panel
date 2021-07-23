<?php

namespace App\DataTables;

use App\Models\PedidoMaterialItem;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class PedidoMaterialItemDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'pedido_material_items.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PedidoMaterialItem $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PedidoMaterialItem $model)
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
            'descricao' => new Column(['title' => __('models/pedidoMaterialItems.fields.descricao'), 'data' => 'descricao'])
,
            'unidade' => new Column(['title' => __('models/pedidoMaterialItems.fields.unidade'), 'data' => 'unidade'])
,
            'saldo_estoque' => new Column(['title' => __('models/pedidoMaterialItems.fields.saldo_estoque'), 'data' => 'saldo_estoque'])
,
            'quantidade_solicitada' => new Column(['title' => __('models/pedidoMaterialItems.fields.quantidade_solicitada'), 'data' => 'quantidade_solicitada'])
,
            'preco_anterior' => new Column(['title' => __('models/pedidoMaterialItems.fields.preco_anterior'), 'data' => 'preco_anterior'])
,
            'total' => new Column(['title' => __('models/pedidoMaterialItems.fields.total'), 'data' => 'total'])
,
            'observacoes' => new Column(['title' => __('models/pedidoMaterialItems.fields.observacoes'), 'data' => 'observacoes'])
,
            'pedido_material_id' => new Column(['title' => __('models/pedidoMaterialItems.fields.pedido_material_id'), 'data' => 'pedido_material_id'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pedido_material_itemsdatatable_' . time();
    }
}
