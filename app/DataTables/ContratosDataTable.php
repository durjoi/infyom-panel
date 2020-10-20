<?php

namespace App\DataTables;

use App\Models\Contratos;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ContratosDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'contratos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Contratos $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Contratos $model)
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
            'contrato_numero' => new Column(['title' => __('models/contratos.fields.contrato_numero'), 'data' => 'contrato_numero'])
,
            'contrato_tipo' => new Column(['title' => __('models/contratos.fields.contrato_tipo'), 'data' => 'contrato_tipo'])
,
            'data_inicio' => new Column(['title' => __('models/contratos.fields.data_inicio'), 'data' => 'data_inicio'])
,
            'data_termino' => new Column(['title' => __('models/contratos.fields.data_termino'), 'data' => 'data_termino'])
,
            'fatork' => new Column(['title' => __('models/contratos.fields.fatork'), 'data' => 'fatork'])
,
            'operacao' => new Column(['title' => __('models/contratos.fields.operacao'), 'data' => 'operacao'])
,
            'incluidodoem' => new Column(['title' => __('models/contratos.fields.incluidodoem'), 'data' => 'incluidodoem'])
,
            'id_empresa' => new Column(['title' => __('models/contratos.fields.id_empresa'), 'data' => 'empresa.empresa_nome'])
,
            'id_cidade' => new Column(['title' => __('models/contratos.fields.id_cidade'), 'data' => 'cidade.descricao'])
,
            'id_usuario' => new Column(['title' => __('models/contratos.fields.id_usuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'contratosdatatable_' . time();
    }
}
