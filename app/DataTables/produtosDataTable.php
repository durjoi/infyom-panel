<?php

namespace App\DataTables;

use App\Models\produtos;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class produtosDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'produtos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\produtos $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(produtos $model)
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
            'idcidade' => new Column(['title' => __('models/produtos.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'produtos_descricao' => new Column(['title' => __('models/produtos.fields.produtos_descricao'), 'data' => 'produtos_descricao'])
,
            'idmarca' => new Column(['title' => __('models/produtos.fields.idmarca'), 'data' => 'marca.marca_descricao'])
,
            'idunidade' => new Column(['title' => __('models/produtos.fields.idunidade'), 'data' => 'unidade.unidade_descricao'])
,
            'quantidade_atual' => new Column(['title' => __('models/produtos.fields.quantidade_atual'), 'data' => 'quantidade_atual'])
,
            'quantidade_minima' => new Column(['title' => __('models/produtos.fields.quantidade_minima'), 'data' => 'quantidade_minima'])
,
            'valor_unitario' => new Column(['title' => __('models/produtos.fields.valor_unitario'), 'data' => 'valor_unitario'])
,
            'idfornecedor' => new Column(['title' => __('models/produtos.fields.idfornecedor'), 'data' => 'fornecedor.razao_social'])
,
            'idfabricante' => new Column(['title' => __('models/produtos.fields.idfabricante'), 'data' => 'fabricante.fabricante_descricao'])
,
            'local' => new Column(['title' => __('models/produtos.fields.local'), 'data' => 'local'])
,
            'idaplicacao' => new Column(['title' => __('models/produtos.fields.idaplicacao'), 'data' => 'aplicacao.aplicacao_descricao'])
,
            'excluido' => new Column(['title' => __('models/produtos.fields.excluido'), 'data' => 'excluido'])
,
            'incluidoem' => new Column(['title' => __('models/produtos.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuario' => new Column(['title' => __('models/produtos.fields.idusuario'), 'data' => 'usuario.nome'])
,
            'codigo_itens_contrato' => new Column(['title' => __('models/produtos.fields.codigo_itens_contrato'), 'data' => 'codigo_itens_contrato'])
,
            'atualizacao_manual' => new Column(['title' => __('models/produtos.fields.atualizacao_manual'), 'data' => 'atualizacao_manual'])
,
            'atualizacao_manual_idusuario' => new Column(['title' => __('models/produtos.fields.atualizacao_manual_idusuario'), 'data' => 'atualizacao_manual_usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'produtosdatatable_' . time();
    }
}
