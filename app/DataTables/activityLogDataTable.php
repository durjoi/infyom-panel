<?php

namespace App\DataTables;

use App\Models\activityLog;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class activityLogDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'activity_logs.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\activityLog $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(activityLog $model)
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
            'log_name' => new Column(['title' => __('models/activityLogs.fields.log_name'), 'data' => 'log_name'])
,
            'description' => new Column(['title' => __('models/activityLogs.fields.description'), 'data' => 'description'])
,
            'subject_id' => new Column(['title' => __('models/activityLogs.fields.subject_id'), 'data' => 'subject_id'])
,
            'subject_type' => new Column(['title' => __('models/activityLogs.fields.subject_type'), 'data' => 'subject_type'])
,
            'causer_id' => new Column(['title' => __('models/activityLogs.fields.causer_id'), 'data' => 'causer_id'])
,
            'causer_type' => new Column(['title' => __('models/activityLogs.fields.causer_type'), 'data' => 'causer_type'])
,
            'properties' => new Column(['title' => __('models/activityLogs.fields.properties'), 'data' => 'properties'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'activity_logsdatatable_' . time();
    }
}
