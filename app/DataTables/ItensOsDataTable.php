<?php

namespace App\DataTables;

use App\Models\ItensOs;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ItensOsDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'itens_os.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ItensOs $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ItensOs $model)
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
            'material' => new Column(['title' => __('models/itensOs.fields.material'), 'data' => 'material'])
,
            'qtd' => new Column(['title' => __('models/itensOs.fields.qtd'), 'data' => 'qtd'])
,
            'defeito_encontrado' => new Column(['title' => __('models/itensOs.fields.defeito_encontrado'), 'data' => 'defeito_encontrado'])
,
            'causa_provavel' => new Column(['title' => __('models/itensOs.fields.causa_provavel'), 'data' => 'causa_provavel'])
,
            'ordem_de_servico_manutencao_id' => new Column(['title' => __('models/itensOs.fields.ordem_de_servico_manutencao_id'), 'data' => 'ordem_de_servico_manutencao_id'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'itens_osdatatable_' . time();
    }
}
