<?php

namespace App\DataTables;

use App\Models\requisicao;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class requisicaoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'requisicaos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\requisicao $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(requisicao $model)
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
            'data_operacao' => new Column(['title' => __('models/requisicaos.fields.data_operacao'), 'data' => 'data_operacao'])
,
            'operacao' => new Column(['title' => __('models/requisicaos.fields.operacao'), 'data' => 'operacao'])
,
            'solicitante' => new Column(['title' => __('models/requisicaos.fields.solicitante'), 'data' => 'solicitante'])
,
            'autorizado_por' => new Column(['title' => __('models/requisicaos.fields.autorizado_por'), 'data' => 'autorizado_por'])
,
            'obras' => new Column(['title' => __('models/requisicaos.fields.obras'), 'data' => 'obras'])
,
            'bairro' => new Column(['title' => __('models/requisicaos.fields.bairro'), 'data' => 'bairro'])
,
            'turma' => new Column(['title' => __('models/requisicaos.fields.turma'), 'data' => 'turma'])
,
            'observacao' => new Column(['title' => __('models/requisicaos.fields.observacao'), 'data' => 'observacao'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'requisicaosdatatable_' . time();
    }
}
