<?php

namespace App\DataTables;

use App\Models\Estoque_entradas_produto;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class Estoque_entradas_produtoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'estoque_entradas_produtos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Estoque_entradas_produto $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Estoque_entradas_produto $model)
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
            'quantidade' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.quantidade'), 'data' => 'quantidade'])
,
            'dev_mat_novo_def' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.dev_mat_novo_def'), 'data' => 'dev_mat_novo_def'])
,
            'dev_mat_n_apl' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.dev_mat_n_apl'), 'data' => 'dev_mat_n_apl'])
,
            'dev_mat_apl' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.dev_mat_apl'), 'data' => 'dev_mat_apl'])
,
            'valor_unitario' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.valor_unitario'), 'data' => 'valor_unitario'])
,
            'valor_total' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.valor_total'), 'data' => 'valor_total'])
,
            'incluidodoem' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.incluidodoem'), 'data' => 'incluidodoem'])
,
            'id_entrada' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.id_entrada'), 'data' => 'id_entrada'])
,
            'id_producto' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.id_producto'), 'data' => 'produto.produtos_descricao'])
,
            'id_cidade' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.id_cidade'), 'data' => 'cidade.descricao'])
,
            'id_usuario' => new Column(['title' => __('models/estoqueEntradasProdutos.fields.id_usuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'estoque_entradas_produtosdatatable_' . time();
    }
}
