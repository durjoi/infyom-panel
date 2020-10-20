<?php

namespace App\DataTables;

use App\Models\Pontos;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class PontosDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'pontos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pontos $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pontos $model)
    {
        return $model->newQuery();
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
            'numero_do_poste' => new Column(['title' => __('models/pontos.fields.numero_do_poste'), 'data' => 'numero_do_poste'])
,
            'cadastro_sativa' => new Column(['title' => __('models/pontos.fields.cadastro_sativa'), 'data' => 'cadastro_sativa'])
,
            'trafo' => new Column(['title' => __('models/pontos.fields.trafo'), 'data' => 'trafo'])
,
            'endereco_descricao' => new Column(['title' => __('models/pontos.fields.endereco_descricao'), 'data' => 'endereco_descricao'])
,
            'acompanhamento_obras_id' => new Column(['title' => __('models/pontos.fields.acompanhamento_obras_id'), 'data' => 'acompanhamento_obras_id'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pontosdatatable_' . time();
    }
}
