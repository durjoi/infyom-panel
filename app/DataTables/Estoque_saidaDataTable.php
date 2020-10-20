<?php

namespace App\DataTables;

use App\Models\Estoque_saida;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class Estoque_saidaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'estoque_saidas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Estoque_saida $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Estoque_saida $model)
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
            'solicitante' => new Column(['title' => __('models/estoqueSaidas.fields.solicitante'), 'data' => 'solicitante'])
,
            'autorizado_por' => new Column(['title' => __('models/estoqueSaidas.fields.autorizado_por'), 'data' => 'autorizado_por'])
,
            'actualizacao' => new Column(['title' => __('models/estoqueSaidas.fields.actualizacao'), 'data' => 'actualizacao'])
,
            'observacao' => new Column(['title' => __('models/estoqueSaidas.fields.observacao'), 'data' => 'observacao'])
,
            'incluidodoem' => new Column(['title' => __('models/estoqueSaidas.fields.incluidodoem'), 'data' => 'incluidodoem'])
,
            'id_operacao' => new Column(['title' => __('models/estoqueSaidas.fields.id_operacao'), 'data' => 'operacao.operacao'])
,
            'id_obras_estoque' => new Column(['title' => __('models/estoqueSaidas.fields.id_obras_estoque'), 'data' => 'obras_estoque.obras_estoque_descricao'])
,
            'id_bairro' => new Column(['title' => __('models/estoqueSaidas.fields.id_bairro'), 'data' => 'bairro.bairro_descricao'])
,
            'id_turma' => new Column(['title' => __('models/estoqueSaidas.fields.id_turma'), 'data' => 'turma.cabo_turma'])
,
            'id_cidade' => new Column(['title' => __('models/estoqueSaidas.fields.id_cidade'), 'data' => 'cidade.descricao'])
,
            'id_usuario' => new Column(['title' => __('models/estoqueSaidas.fields.id_usuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'estoque_saidasdatatable_' . time();
    }
}

