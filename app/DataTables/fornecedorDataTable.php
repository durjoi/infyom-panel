<?php

namespace App\DataTables;

use App\Models\fornecedor;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class fornecedorDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'fornecedors.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\fornecedor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(fornecedor $model)
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
            'cnpj' => new Column(['title' => __('models/fornecedors.fields.cnpj'), 'data' => 'cnpj'])
,
            'razao_social' => new Column(['title' => __('models/fornecedors.fields.razao_social'), 'data' => 'razao_social'])
,
            'fantasia' => new Column(['title' => __('models/fornecedors.fields.fantasia'), 'data' => 'fantasia'])
,
            'endereco' => new Column(['title' => __('models/fornecedors.fields.endereco'), 'data' => 'endereco'])
,
            'numero' => new Column(['title' => __('models/fornecedors.fields.numero'), 'data' => 'numero'])
,
            'complemento' => new Column(['title' => __('models/fornecedors.fields.complemento'), 'data' => 'complemento'])
,
            'bairro' => new Column(['title' => __('models/fornecedors.fields.bairro'), 'data' => 'bairro'])
,
            'cidade' => new Column(['title' => __('models/fornecedors.fields.cidade'), 'data' => 'cidade'])
,
            'uf' => new Column(['title' => __('models/fornecedors.fields.uf'), 'data' => 'uf'])
,
            'cep' => new Column(['title' => __('models/fornecedors.fields.cep'), 'data' => 'cep'])
,
            'contato' => new Column(['title' => __('models/fornecedors.fields.contato'), 'data' => 'contato'])
,
            'telefone' => new Column(['title' => __('models/fornecedors.fields.telefone'), 'data' => 'telefone'])
,
            'fax' => new Column(['title' => __('models/fornecedors.fields.fax'), 'data' => 'fax'])
,
            'email' => new Column(['title' => __('models/fornecedors.fields.email'), 'data' => 'email'])
,
            'produtos' => new Column(['title' => __('models/fornecedors.fields.produtos'), 'data' => 'produtos'])
,
            'observacao' => new Column(['title' => __('models/fornecedors.fields.observacao'), 'data' => 'observacao'])
,
            'situacao' => new Column(['title' => __('models/fornecedors.fields.situacao'), 'data' => 'situacao'])
,
            'incluidoem' => new Column(['title' => __('models/fornecedors.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuario' => new Column(['title' => __('models/fornecedors.fields.idusuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'fornecedorsdatatable_' . time();
    }
}
