<?php

namespace App\DataTables;

use App\Models\Contrato_itens;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class Contrato_itensDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'contrato_itens.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Contrato_itens $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Contrato_itens $model)
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
            'item' => new Column(['title' => __('models/contratoItens.fields.item'), 'data' => 'item'])
,
            'contrato_itens_descricao' => new Column(['title' => __('models/contratoItens.fields.contrato_itens_descricao'), 'data' => 'contrato_itens_descricao'])
,
            'valor_mao_obra' => new Column(['title' => __('models/contratoItens.fields.valor_mao_obra'), 'data' => 'valor_mao_obra'])
,
            'valor_material' => new Column(['title' => __('models/contratoItens.fields.valor_material'), 'data' => 'valor_material'])
,
            'aplicacao' => new Column(['title' => __('models/contratoItens.fields.aplicacao'), 'data' => 'aplicacao'])
,
            'bloqueio_material' => new Column(['title' => __('models/contratoItens.fields.bloqueio_material'), 'data' => 'bloqueio_material'])
,
            'valor_mao_obra_anterior' => new Column(['title' => __('models/contratoItens.fields.valor_mao_obra_anterior'), 'data' => 'valor_mao_obra_anterior'])
,
            'valor_material_anterior' => new Column(['title' => __('models/contratoItens.fields.valor_material_anterior'), 'data' => 'valor_material_anterior'])
,
            'fatork' => new Column(['title' => __('models/contratoItens.fields.fatork'), 'data' => 'fatork'])
,
            'fatork_operacao' => new Column(['title' => __('models/contratoItens.fields.fatork_operacao'), 'data' => 'fatork_operacao'])
,
            'tempo_garantia' => new Column(['title' => __('models/contratoItens.fields.tempo_garantia'), 'data' => 'tempo_garantia'])
,
            'tempo_garantia_periodo' => new Column(['title' => __('models/contratoItens.fields.tempo_garantia_periodo'), 'data' => 'tempo_garantia_periodo'])
,
            'codigo_produto' => new Column(['title' => __('models/contratoItens.fields.codigo_produto'), 'data' => 'codigo_produto'])
,
            'incluidodoem' => new Column(['title' => __('models/contratoItens.fields.incluidodoem'), 'data' => 'incluidodoem'])
,
//            'id_contrato' => new Column(['title' => __('models/contratoItens.fields.id_contrato'), 'data' => 'contrato.contrato_numero'])
//,
            'id_unidade' => new Column(['title' => __('models/contratoItens.fields.id_unidade'), 'data' => 'unidade.unidade_descricao'])
,
//            'id_marca_produto' => new Column(['title' => __('models/contratoItens.fields.id_marca_produto'), 'data' => 'marca.marca_descricao'])
//,
            'id_cidade' => new Column(['title' => __('models/contratoItens.fields.id_cidade'), 'data' => 'cidade.descricao'])
,
            'id_usuario' => new Column(['title' => __('models/contratoItens.fields.id_usuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'contrato_itensdatatable_' . time();
    }
}
