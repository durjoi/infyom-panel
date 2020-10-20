<?php

namespace App\DataTables;

use App\Models\ipcontaip_11;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ipcontaip_11DataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ipcontaip_11s.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ipcontaip_11 $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ipcontaip_11 $model)
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
            'idcidade' => new Column(['title' => __('models/ipcontaip11s.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'tipo_reg' => new Column(['title' => __('models/ipcontaip11s.fields.tipo_reg'), 'data' => 'tipo_reg'])
,
            'cnpj' => new Column(['title' => __('models/ipcontaip11s.fields.cnpj'), 'data' => 'cnpj'])
,
            'cod_cliente' => new Column(['title' => __('models/ipcontaip11s.fields.cod_cliente'), 'data' => 'cod_cliente'])
,
            'cod_contrato' => new Column(['title' => __('models/ipcontaip11s.fields.cod_contrato'), 'data' => 'cod_contrato'])
,
            'cod_multiservico' => new Column(['title' => __('models/ipcontaip11s.fields.cod_multiservico'), 'data' => 'cod_multiservico'])
,
            'compl_nome' => new Column(['title' => __('models/ipcontaip11s.fields.compl_nome'), 'data' => 'compl_nome'])
,
            'endereco_rua_av' => new Column(['title' => __('models/ipcontaip11s.fields.endereco_rua_av'), 'data' => 'endereco_rua_av'])
,
            'endereco_compl' => new Column(['title' => __('models/ipcontaip11s.fields.endereco_compl'), 'data' => 'endereco_compl'])
,
            'endereco_bairro' => new Column(['title' => __('models/ipcontaip11s.fields.endereco_bairro'), 'data' => 'endereco_bairro'])
,
            'endereco_municipio_uf_cep' => new Column(['title' => __('models/ipcontaip11s.fields.endereco_municipio_uf_cep'), 'data' => 'endereco_municipio_uf_cep'])
,
            'contaipano' => new Column(['title' => __('models/ipcontaip11s.fields.contaipano'), 'data' => 'contaipano'])
,
            'contaipmes' => new Column(['title' => __('models/ipcontaip11s.fields.contaipmes'), 'data' => 'contaipmes'])
,
            'contaipdatainclusao' => new Column(['title' => __('models/ipcontaip11s.fields.contaipdatainclusao'), 'data' => 'contaipdatainclusao'])
,
            'contaipusuariologin' => new Column(['title' => __('models/ipcontaip11s.fields.contaipusuariologin'), 'data' => 'contaipusuariologin'])
,
            'segmento' => new Column(['title' => __('models/ipcontaip11s.fields.segmento'), 'data' => 'segmento'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ipcontaip_11sdatatable_' . time();
    }
}
