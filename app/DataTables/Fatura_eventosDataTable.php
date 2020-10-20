<?php

namespace App\DataTables;

use App\Models\Fatura_eventos;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class Fatura_eventosDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'fatura_eventos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Fatura_eventos $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Fatura_eventos $model)
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
            'numero' => new Column(['title' => __('models/faturaEventos.fields.numero'), 'data' => 'numero'])
,
            'ano' => new Column(['title' => __('models/faturaEventos.fields.ano'), 'data' => 'ano'])
,
            'aberta_em' => new Column(['title' => __('models/faturaEventos.fields.aberta_em'), 'data' => 'aberta_em'])
,
            'aberta_idusuario' => new Column(['title' => __('models/faturaEventos.fields.aberta_idusuario'), 'data' => 'aberta_usuario.nome'])
,
            'encaminhada_em' => new Column(['title' => __('models/faturaEventos.fields.encaminhada_em'), 'data' => 'encaminhada_em'])
,
            'encaminhada_idusuario' => new Column(['title' => __('models/faturaEventos.fields.encaminhada_idusuario'), 'data' => 'encaminhada_usuario.nome'])
,
            'pago_em' => new Column(['title' => __('models/faturaEventos.fields.pago_em'), 'data' => 'pago_em'])
,
            'pago_idusuario' => new Column(['title' => __('models/faturaEventos.fields.pago_idusuario'), 'data' => 'pago_usuario.nome'])
,
            'data_inicio' => new Column(['title' => __('models/faturaEventos.fields.data_inicio'), 'data' => 'data_inicio'])
,
            'data_termino' => new Column(['title' => __('models/faturaEventos.fields.data_termino'), 'data' => 'data_termino'])
,
            'titulo_relatorio' => new Column(['title' => __('models/faturaEventos.fields.titulo_relatorio'), 'data' => 'titulo_relatorio'])
,
            'id_cidade' => new Column(['title' => __('models/faturaEventos.fields.id_cidade'), 'data' => 'cidade.descricao'])
,
            'id_meses' => new Column(['title' => __('models/faturaEventos.fields.id_meses'), 'data' => 'meses.mes'])
,
            'id_empresa' => new Column(['title' => __('models/faturaEventos.fields.id_empresa'), 'data' => 'empresa.empresa_nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'fatura_eventosdatatable_' . time();
    }
}
