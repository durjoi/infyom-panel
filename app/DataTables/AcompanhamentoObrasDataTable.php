<?php

namespace App\DataTables;

use App\Models\AcompanhamentoObras;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class AcompanhamentoObrasDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'acompanhamento_obras.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\AcompanhamentoObras $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(AcompanhamentoObras $model)
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
            'data' => new Column(['title' => __('models/acompanhamentoObras.fields.data'), 'data' => 'data'])
,
            'fiscal_pmrsj' => new Column(['title' => __('models/acompanhamentoObras.fields.fiscal_pmrsj'), 'data' => 'fiscal_pmrsj'])
,
            'fiscal_sativa' => new Column(['title' => __('models/acompanhamentoObras.fields.fiscal_sativa'), 'data' => 'fiscal_sativa'])
,
            'reators_id' => new Column(['title' => __('models/acompanhamentoObras.fields.reators_id'), 'data' => 'reators.reator_descricao'])
,
            'lampadas_id' => new Column(['title' => __('models/acompanhamentoObras.fields.lampadas_id'), 'data' => 'lampadas.lampada_descricao'])
,
            'reles_id' => new Column(['title' => __('models/acompanhamentoObras.fields.reles_id'), 'data' => 'reles.rele_descricao'])
,
            'bases_id' => new Column(['title' => __('models/acompanhamentoObras.fields.bases_id'), 'data' => 'bases.base_descricao'])
,
            'luminarias_id' => new Column(['title' => __('models/acompanhamentoObras.fields.luminarias_id'), 'data' => 'luminarias.luminaria_descricao'])
,
            'protocolo' => new Column(['title' => __('models/acompanhamentoObras.fields.protocolo'), 'data' => 'protocolo'])
,
            'material_utilizado_sativa' => new Column(['title' => __('models/acompanhamentoObras.fields.material_utilizado_sativa'), 'data' => 'material_utilizado_sativa'])
,
            'material_utilizado_sesp' => new Column(['title' => __('models/acompanhamentoObras.fields.material_utilizado_sesp'), 'data' => 'material_utilizado_sesp'])
,
            'observacoes_extras' => new Column(['title' => __('models/acompanhamentoObras.fields.observacoes_extras'), 'data' => 'observacoes_extras'])
,
            'observacoes_sativa' => new Column(['title' => __('models/acompanhamentoObras.fields.observacoes_sativa'), 'data' => 'observacoes_sativa'])
,
            'recebimento_sesp' => new Column(['title' => __('models/acompanhamentoObras.fields.recebimento_sesp'), 'data' => 'recebimento_sesp'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'acompanhamento_obrasdatatable_' . time();
    }
}
