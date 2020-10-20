<?php

namespace App\DataTables;

use App\Models\medidor;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class medidorDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'medidors.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\medidor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(medidor $model)
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
            'idcidade' => new Column(['title' => __('models/medidors.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'numero' => new Column(['title' => __('models/medidors.fields.numero'), 'data' => 'numero'])
,
            'idlogradouro' => new Column(['title' => __('models/medidors.fields.idlogradouro'), 'data' => 'logradouro.logradouro_descricao'])
,
            'idbairro' => new Column(['title' => __('models/medidors.fields.idbairro'), 'data' => 'bairro.bairro_descricao'])
,
            'poste_numero' => new Column(['title' => __('models/medidors.fields.poste_numero'), 'data' => 'poste_numero'])
,
            'contrato' => new Column(['title' => __('models/medidors.fields.contrato'), 'data' => 'contrato'])
,
            'capacidade_medicao' => new Column(['title' => __('models/medidors.fields.capacidade_medicao'), 'data' => 'capacidade_medicao'])
,
            'capacidade_disjuntor' => new Column(['title' => __('models/medidors.fields.capacidade_disjuntor'), 'data' => 'capacidade_disjuntor'])
,
            'incluidoem' => new Column(['title' => __('models/medidors.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuario' => new Column(['title' => __('models/medidors.fields.idusuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'medidorsdatatable_' . time();
    }
}
