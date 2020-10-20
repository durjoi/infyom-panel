<?php

namespace App\DataTables;

use App\Models\solicitacao_material_itens;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class solicitacao_material_itensDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'solicitacao_material_itens.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\solicitacao_material_itens $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(solicitacao_material_itens $model)
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
            'idcidade' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'idcontratoitens' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.idcontratoitens'), 'data' => 'contratoitens.contrato_itens_descricao'])
,
            'mo_quantidade' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.mo_quantidade'), 'data' => 'mo_quantidade'])
,
            'mo_origem' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.mo_origem'), 'data' => 'mo_origem'])
,
            'mt_quantidade' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.mt_quantidade'), 'data' => 'mt_quantidade'])
,
            'mt_origem' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.mt_origem'), 'data' => 'mt_origem'])
,
            'idusuario' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.idusuario'), 'data' => 'usuario.nome'])
,
            'item_com_vandalismo' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.item_com_vandalismo'), 'data' => 'item_com_vandalismo'])
,
            'sucata_nao_retornada' => new Column(['title' => __('models/solicitacaoMaterialItens.fields.sucata_nao_retornada'), 'data' => 'sucata_nao_retornada'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'solicitacao_material_itensdatatable_' . time();
    }
}
