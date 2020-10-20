<?php

namespace App\DataTables;

use App\Models\Fatura_eventos_os;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class Fatura_eventos_osDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'fatura_eventos_os.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Fatura_eventos_os $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Fatura_eventos_os $model)
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
            'valor_os' => new Column(['title' => __('models/faturaEventosOs.fields.valor_os'), 'data' => 'valor_os'])
,
            'incluidodoem' => new Column(['title' => __('models/faturaEventosOs.fields.incluidodoem'), 'data' => 'incluidodoem'])
,
            'id_factura_eventos' => new Column(['title' => __('models/faturaEventosOs.fields.id_factura_eventos'), 'data' => 'factura_eventos.numero'])
,
            'id_eventos' => new Column(['title' => __('models/faturaEventosOs.fields.id_eventos'), 'data' => 'eventos.evento_descricao'])
,
            'id_cidade' => new Column(['title' => __('models/faturaEventosOs.fields.id_cidade'), 'data' => 'cidade.descricao'])
,
            'id_usuario' => new Column(['title' => __('models/faturaEventosOs.fields.id_usuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'fatura_eventos_osdatatable_' . time();
    }
}
