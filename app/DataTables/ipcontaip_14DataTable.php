<?php

namespace App\DataTables;

use App\Models\ipcontaip_14;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ipcontaip_14DataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ipcontaip_14s.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ipcontaip_14 $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ipcontaip_14 $model)
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
            'idcidade' => new Column(['title' => __('models/ipcontaip14s.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'tipo_reg' => new Column(['title' => __('models/ipcontaip14s.fields.tipo_reg'), 'data' => 'tipo_reg'])
,
            'cnpj' => new Column(['title' => __('models/ipcontaip14s.fields.cnpj'), 'data' => 'cnpj'])
,
            'cod_cliente' => new Column(['title' => __('models/ipcontaip14s.fields.cod_cliente'), 'data' => 'cod_cliente'])
,
            'cod_contrato' => new Column(['title' => __('models/ipcontaip14s.fields.cod_contrato'), 'data' => 'cod_contrato'])
,
            'cod_multiservico' => new Column(['title' => __('models/ipcontaip14s.fields.cod_multiservico'), 'data' => 'cod_multiservico'])
,
            'num_doc_pag_coletiva' => new Column(['title' => __('models/ipcontaip14s.fields.num_doc_pag_coletiva'), 'data' => 'num_doc_pag_coletiva'])
,
            'num_fatura' => new Column(['title' => __('models/ipcontaip14s.fields.num_fatura'), 'data' => 'num_fatura'])
,
            'cod_conceito' => new Column(['title' => __('models/ipcontaip14s.fields.cod_conceito'), 'data' => 'cod_conceito'])
,
            'qtd_conceito' => new Column(['title' => __('models/ipcontaip14s.fields.qtd_conceito'), 'data' => 'qtd_conceito'])
,
            'preco_conceito' => new Column(['title' => __('models/ipcontaip14s.fields.preco_conceito'), 'data' => 'preco_conceito'])
,
            'sinal_do_valor_conceitos' => new Column(['title' => __('models/ipcontaip14s.fields.sinal_do_valor_conceitos'), 'data' => 'sinal_do_valor_conceitos'])
,
            'valor_final_com_imposto' => new Column(['title' => __('models/ipcontaip14s.fields.valor_final_com_imposto'), 'data' => 'valor_final_com_imposto'])
,
            'descricao_conceito' => new Column(['title' => __('models/ipcontaip14s.fields.descricao_conceito'), 'data' => 'descricao_conceito'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ipcontaip_14sdatatable_' . time();
    }
}
