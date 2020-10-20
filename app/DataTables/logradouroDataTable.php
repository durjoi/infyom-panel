<?php

namespace App\DataTables;

use App\Models\logradouro;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class logradouroDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'logradouros.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\logradouro $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(logradouro $model)
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
            'idcidade' => new Column(['title' => __('models/logradouros.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'logradouro_codigo' => new Column(['title' => __('models/logradouros.fields.logradouro_codigo'), 'data' => 'logradouro_codigo'])
,
            'logradouro_codigodiv' => new Column(['title' => __('models/logradouros.fields.logradouro_codigodiv'), 'data' => 'logradouro_codigodiv'])
,
            'idlogradourotipo' => new Column(['title' => __('models/logradouros.fields.idlogradourotipo'), 'data' => 'logradourotipo.logradouro_tipo_abreviado'])
,
            'logradouro_titulo' => new Column(['title' => __('models/logradouros.fields.logradouro_titulo'), 'data' => 'logradouro_titulo'])
,
            'logradouro_preposicao' => new Column(['title' => __('models/logradouros.fields.logradouro_preposicao'), 'data' => 'logradouro_preposicao'])
,
            'logradouro_descricao' => new Column(['title' => __('models/logradouros.fields.logradouro_descricao'), 'data' => 'logradouro_descricao'])
,
            'logradouro_conjunto' => new Column(['title' => __('models/logradouros.fields.logradouro_conjunto'), 'data' => 'logradouro_conjunto'])
,
            'logradouro_cep' => new Column(['title' => __('models/logradouros.fields.logradouro_cep'), 'data' => 'logradouro_cep'])
,
            'logradouro_estado' => new Column(['title' => __('models/logradouros.fields.logradouro_estado'), 'data' => 'logradouro_estado'])
,
            'idbairro' => new Column(['title' => __('models/logradouros.fields.idbairro'), 'data' => 'bairro.bairro_descricao'])
,
            'trafego_pedestres' => new Column(['title' => __('models/logradouros.fields.trafego_pedestres'), 'data' => 'trafego_pedestres'])
,
            'trafego_veiculos' => new Column(['title' => __('models/logradouros.fields.trafego_veiculos'), 'data' => 'trafego_veiculos'])
,
            'importancia_via' => new Column(['title' => __('models/logradouros.fields.importancia_via'), 'data' => 'importancia_via'])
,
            'arborizacao' => new Column(['title' => __('models/logradouros.fields.arborizacao'), 'data' => 'arborizacao'])
,
            'idempresa' => new Column(['title' => __('models/logradouros.fields.idempresa'), 'data' => 'empresa.empresa_nome'])
,
            'incluidoem' => new Column(['title' => __('models/logradouros.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuario' => new Column(['title' => __('models/logradouros.fields.idusuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'logradourosdatatable_' . time();
    }
}
