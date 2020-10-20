<?php

namespace App\DataTables;

use App\Models\fatura_obras;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class fatura_obrasDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'fatura_obras.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\fatura_obras $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(fatura_obras $model)
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
            'idcidade' => new Column(['title' => __('models/faturaObras.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'idempresa' => new Column(['title' => __('models/faturaObras.fields.idempresa'), 'data' => 'empresa.empresa_nome'])
,
            'numero' => new Column(['title' => __('models/faturaObras.fields.numero'), 'data' => 'numero'])
,
            'idmeses' => new Column(['title' => __('models/faturaObras.fields.idmeses'), 'data' => 'meses.mes'])
,
            'ano' => new Column(['title' => __('models/faturaObras.fields.ano'), 'data' => 'ano'])
,
            'situacao' => new Column(['title' => __('models/faturaObras.fields.situacao'), 'data' => 'situacao'])
,
            'aberta_em' => new Column(['title' => __('models/faturaObras.fields.aberta_em'), 'data' => 'aberta_em'])
,
            'aberta_idusuario' => new Column(['title' => __('models/faturaObras.fields.aberta_idusuario'), 'data' => 'aberta_usuario.nome'])
,
            'encaminhada_em' => new Column(['title' => __('models/faturaObras.fields.encaminhada_em'), 'data' => 'encaminhada_em'])
,
            'encaminhada_idusuario' => new Column(['title' => __('models/faturaObras.fields.encaminhada_idusuario'), 'data' => 'encaminhada_usuario.nome'])
,
            'pago_em' => new Column(['title' => __('models/faturaObras.fields.pago_em'), 'data' => 'pago_em'])
,
            'pago_idusuario' => new Column(['title' => __('models/faturaObras.fields.pago_idusuario'), 'data' => 'pago_usuario.nome'])
,
            'data_inicio' => new Column(['title' => __('models/faturaObras.fields.data_inicio'), 'data' => 'data_inicio'])
,
            'data_termino' => new Column(['title' => __('models/faturaObras.fields.data_termino'), 'data' => 'data_termino'])
,
            'titulo_relatorio' => new Column(['title' => __('models/faturaObras.fields.titulo_relatorio'), 'data' => 'titulo_relatorio'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'fatura_obrasdatatable_' . time();
    }
}
