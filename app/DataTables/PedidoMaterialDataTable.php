<?php

namespace App\DataTables;

use App\Models\PedidoMaterial;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class PedidoMaterialDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'pedido_materials.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PedidoMaterial $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PedidoMaterial $model)
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
            'aplicacao_obra' => new Column(['title' => __('models/pedidoMaterials.fields.aplicacao_obra'), 'data' => 'aplicacao_obra'])
,
            'engenheiro_eletricista' => new Column(['title' => __('models/pedidoMaterials.fields.engenheiro_eletricista'), 'data' => 'engenheiro_eletricista'])
,
            'data' => new Column(['title' => __('models/pedidoMaterials.fields.data'), 'data' => 'data'])
,
            'numero' => new Column(['title' => __('models/pedidoMaterials.fields.numero'), 'data' => 'numero'])
,
            'centro_de_custo' => new Column(['title' => __('models/pedidoMaterials.fields.centro_de_custo'), 'data' => 'centro_de_custo'])
,
            'almoxarifado' => new Column(['title' => __('models/pedidoMaterials.fields.almoxarifado'), 'data' => 'almoxarifado'])
,
            'telefone' => new Column(['title' => __('models/pedidoMaterials.fields.telefone'), 'data' => 'telefone'])
,
            'celular' => new Column(['title' => __('models/pedidoMaterials.fields.celular'), 'data' => 'celular'])
,
            'cnpj' => new Column(['title' => __('models/pedidoMaterials.fields.cnpj'), 'data' => 'cnpj'])
,
            'inscricao_estadual' => new Column(['title' => __('models/pedidoMaterials.fields.inscricao_estadual'), 'data' => 'inscricao_estadual'])
,
            'solicitante' => new Column(['title' => __('models/pedidoMaterials.fields.solicitante'), 'data' => 'solicitante'])
,
            'icms' => new Column(['title' => __('models/pedidoMaterials.fields.icms'), 'data' => 'icms'])
,
            'juros_mes' => new Column(['title' => __('models/pedidoMaterials.fields.juros_mes'), 'data' => 'juros_mes'])
,
            'email' => new Column(['title' => __('models/pedidoMaterials.fields.email'), 'data' => 'email'])
,
            'endereco_entrega' => new Column(['title' => __('models/pedidoMaterials.fields.endereco_entrega'), 'data' => 'endereco_entrega'])
,
            'bairro_entrega' => new Column(['title' => __('models/pedidoMaterials.fields.bairro_entrega'), 'data' => 'bairro_entrega'])
,
            'cep_entrega' => new Column(['title' => __('models/pedidoMaterials.fields.cep_entrega'), 'data' => 'cep_entrega'])
,
            'cnpj_entrega' => new Column(['title' => __('models/pedidoMaterials.fields.cnpj_entrega'), 'data' => 'cnpj_entrega'])
,
            'cidade_entrega' => new Column(['title' => __('models/pedidoMaterials.fields.cidade_entrega'), 'data' => 'cidade_entrega'])
,
            'telefone_contato' => new Column(['title' => __('models/pedidoMaterials.fields.telefone_contato'), 'data' => 'telefone_contato'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pedido_materialsdatatable_' . time();
    }
}
