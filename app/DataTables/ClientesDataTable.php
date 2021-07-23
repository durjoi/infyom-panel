<?php

namespace App\DataTables;

use App\Models\Clientes;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ClientesDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'clientes.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Clientes $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Clientes $model)
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
            'razao_social' => new Column(['title' => __('models/clientes.fields.razao_social'), 'data' => 'razao_social'])
,
            'nome_fantasi' => new Column(['title' => __('models/clientes.fields.nome_fantasi'), 'data' => 'nome_fantasi'])
,
            'cnpj' => new Column(['title' => __('models/clientes.fields.cnpj'), 'data' => 'cnpj'])
,
            'inscricao_municipal' => new Column(['title' => __('models/clientes.fields.inscricao_municipal'), 'data' => 'inscricao_municipal'])
,
            'inscricao_estadual' => new Column(['title' => __('models/clientes.fields.inscricao_estadual'), 'data' => 'inscricao_estadual'])
,
            'incluidodoem' => new Column(['title' => __('models/clientes.fields.incluidodoem'), 'data' => 'incluidodoem'])
,
            'id_cidade' => new Column(['title' => __('models/clientes.fields.id_cidade'), 'data' => 'cidade.descricao'])
,
            'id_usuario' => new Column(['title' => __('models/clientes.fields.id_usuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'clientesdatatable_' . time();
    }
}
