<?php

namespace App\DataTables;

use App\Models\ipcontaip_12;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ipcontaip_12DataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ipcontaip_12s.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ipcontaip_12 $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ipcontaip_12 $model)
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
            'idcidade' => new Column(['title' => __('models/ipcontaip12s.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'tipo_reg' => new Column(['title' => __('models/ipcontaip12s.fields.tipo_reg'), 'data' => 'tipo_reg'])
,
            'cnpj' => new Column(['title' => __('models/ipcontaip12s.fields.cnpj'), 'data' => 'cnpj'])
,
            'cod_cliente' => new Column(['title' => __('models/ipcontaip12s.fields.cod_cliente'), 'data' => 'cod_cliente'])
,
            'cod_contrato' => new Column(['title' => __('models/ipcontaip12s.fields.cod_contrato'), 'data' => 'cod_contrato'])
,
            'cod_multiservico' => new Column(['title' => __('models/ipcontaip12s.fields.cod_multiservico'), 'data' => 'cod_multiservico'])
,
            'num_cod_pag_cta_coletivo' => new Column(['title' => __('models/ipcontaip12s.fields.num_cod_pag_cta_coletivo'), 'data' => 'num_cod_pag_cta_coletivo'])
,
            'num_fatura' => new Column(['title' => __('models/ipcontaip12s.fields.num_fatura'), 'data' => 'num_fatura'])
,
            'codigo_instalacao' => new Column(['title' => __('models/ipcontaip12s.fields.codigo_instalacao'), 'data' => 'codigo_instalacao'])
,
            'cod_classe_subclasse' => new Column(['title' => __('models/ipcontaip12s.fields.cod_classe_subclasse'), 'data' => 'cod_classe_subclasse'])
,
            'cod_tarifa' => new Column(['title' => __('models/ipcontaip12s.fields.cod_tarifa'), 'data' => 'cod_tarifa'])
,
            'tensao_fornecimento' => new Column(['title' => __('models/ipcontaip12s.fields.tensao_fornecimento'), 'data' => 'tensao_fornecimento'])
,
            'data_fatura' => new Column(['title' => __('models/ipcontaip12s.fields.data_fatura'), 'data' => 'data_fatura'])
,
            'data_vencimento' => new Column(['title' => __('models/ipcontaip12s.fields.data_vencimento'), 'data' => 'data_vencimento'])
,
            'data_leit_anterior' => new Column(['title' => __('models/ipcontaip12s.fields.data_leit_anterior'), 'data' => 'data_leit_anterior'])
,
            'data_leit_atual' => new Column(['title' => __('models/ipcontaip12s.fields.data_leit_atual'), 'data' => 'data_leit_atual'])
,
            'tipo_fatura' => new Column(['title' => __('models/ipcontaip12s.fields.tipo_fatura'), 'data' => 'tipo_fatura'])
,
            'sinal_do_saldo_da_fatura' => new Column(['title' => __('models/ipcontaip12s.fields.sinal_do_saldo_da_fatura'), 'data' => 'sinal_do_saldo_da_fatura'])
,
            'saldo_da_fatura' => new Column(['title' => __('models/ipcontaip12s.fields.saldo_da_fatura'), 'data' => 'saldo_da_fatura'])
,
            'valor_do_icms' => new Column(['title' => __('models/ipcontaip12s.fields.valor_do_icms'), 'data' => 'valor_do_icms'])
,
            'base_calculo_icms' => new Column(['title' => __('models/ipcontaip12s.fields.base_calculo_icms'), 'data' => 'base_calculo_icms'])
,
            'aliquota_icms' => new Column(['title' => __('models/ipcontaip12s.fields.aliquota_icms'), 'data' => 'aliquota_icms'])
,
            'perda_transformacao' => new Column(['title' => __('models/ipcontaip12s.fields.perda_transformacao'), 'data' => 'perda_transformacao'])
,
            'fator_de_potencia' => new Column(['title' => __('models/ipcontaip12s.fields.fator_de_potencia'), 'data' => 'fator_de_potencia'])
,
            'valor_da_demanda_contratada' => new Column(['title' => __('models/ipcontaip12s.fields.valor_da_demanda_contratada'), 'data' => 'valor_da_demanda_contratada'])
,
            'valor_da_demanda_contratada_na_ponta' => new Column(['title' => __('models/ipcontaip12s.fields.valor_da_demanda_contratada_na_ponta'), 'data' => 'valor_da_demanda_contratada_na_ponta'])
,
            'valor_da_demanda_contratada_fora_de_ponta' => new Column(['title' => __('models/ipcontaip12s.fields.valor_da_demanda_contratada_fora_de_ponta'), 'data' => 'valor_da_demanda_contratada_fora_de_ponta'])
,
            'valor_do_pis_fatura' => new Column(['title' => __('models/ipcontaip12s.fields.valor_do_pis_fatura'), 'data' => 'valor_do_pis_fatura'])
,
            'valor_do_cofins_fatura' => new Column(['title' => __('models/ipcontaip12s.fields.valor_do_cofins_fatura'), 'data' => 'valor_do_cofins_fatura'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ipcontaip_12sdatatable_' . time();
    }
}
