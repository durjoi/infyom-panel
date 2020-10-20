<?php

namespace App\DataTables;

use App\Models\ipcontaip_13;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ipcontaip_13DataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ipcontaip_13s.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ipcontaip_13 $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ipcontaip_13 $model)
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
            'idcidade' => new Column(['title' => __('models/ipcontaip13s.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'tipo_reg' => new Column(['title' => __('models/ipcontaip13s.fields.tipo_reg'), 'data' => 'tipo_reg'])
,
            'cnpj' => new Column(['title' => __('models/ipcontaip13s.fields.cnpj'), 'data' => 'cnpj'])
,
            'cod_cliente' => new Column(['title' => __('models/ipcontaip13s.fields.cod_cliente'), 'data' => 'cod_cliente'])
,
            'cod_contrato' => new Column(['title' => __('models/ipcontaip13s.fields.cod_contrato'), 'data' => 'cod_contrato'])
,
            'cod_multiservico' => new Column(['title' => __('models/ipcontaip13s.fields.cod_multiservico'), 'data' => 'cod_multiservico'])
,
            'num_doc_pag_coletiva' => new Column(['title' => __('models/ipcontaip13s.fields.num_doc_pag_coletiva'), 'data' => 'num_doc_pag_coletiva'])
,
            'num_fatura' => new Column(['title' => __('models/ipcontaip13s.fields.num_fatura'), 'data' => 'num_fatura'])
,
            'num_medidor' => new Column(['title' => __('models/ipcontaip13s.fields.num_medidor'), 'data' => 'num_medidor'])
,
            'descr_funcao_reduzida' => new Column(['title' => __('models/ipcontaip13s.fields.descr_funcao_reduzida'), 'data' => 'descr_funcao_reduzida'])
,
            'data_leit_anterior' => new Column(['title' => __('models/ipcontaip13s.fields.data_leit_anterior'), 'data' => 'data_leit_anterior'])
,
            'data_leit_atual' => new Column(['title' => __('models/ipcontaip13s.fields.data_leit_atual'), 'data' => 'data_leit_atual'])
,
            'leitura' => new Column(['title' => __('models/ipcontaip13s.fields.leitura'), 'data' => 'leitura'])
,
            'constante' => new Column(['title' => __('models/ipcontaip13s.fields.constante'), 'data' => 'constante'])
,
            'sinal_do_ajuste' => new Column(['title' => __('models/ipcontaip13s.fields.sinal_do_ajuste'), 'data' => 'sinal_do_ajuste'])
,
            'ajuste' => new Column(['title' => __('models/ipcontaip13s.fields.ajuste'), 'data' => 'ajuste'])
,
            'csu_dem_lida' => new Column(['title' => __('models/ipcontaip13s.fields.csu_dem_lida'), 'data' => 'csu_dem_lida'])
,
            'csu_dem_lida_com_ajuste' => new Column(['title' => __('models/ipcontaip13s.fields.csu_dem_lida_com_ajuste'), 'data' => 'csu_dem_lida_com_ajuste'])
,
            'descricao_funcao' => new Column(['title' => __('models/ipcontaip13s.fields.descricao_funcao'), 'data' => 'descricao_funcao'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ipcontaip_13sdatatable_' . time();
    }
}
