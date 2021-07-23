<?php

namespace App\DataTables;

use App\Models\ipcontaip_estimada;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ipcontaip_estimadaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ipcontaip_estimadas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ipcontaip_estimada $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ipcontaip_estimada $model)
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
            'idcidade' => new Column(['title' => __('models/ipcontaipEstimadas.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'nome_concessionaria' => new Column(['title' => __('models/ipcontaipEstimadas.fields.nome_concessionaria'), 'data' => 'nome_concessionaria'])
,
            'nome' => new Column(['title' => __('models/ipcontaipEstimadas.fields.nome'), 'data' => 'nome'])
,
            'nome_compl' => new Column(['title' => __('models/ipcontaipEstimadas.fields.nome_compl'), 'data' => 'nome_compl'])
,
            'idsecretaria' => new Column(['title' => __('models/ipcontaipEstimadas.fields.idsecretaria'), 'data' => 'idsecretaria'])
,
            'num_fatura' => new Column(['title' => __('models/ipcontaipEstimadas.fields.num_fatura'), 'data' => 'num_fatura'])
,
            'data_vencimento' => new Column(['title' => __('models/ipcontaipEstimadas.fields.data_vencimento'), 'data' => 'data_vencimento'])
,
            'endereco_rua_av' => new Column(['title' => __('models/ipcontaipEstimadas.fields.endereco_rua_av'), 'data' => 'endereco_rua_av'])
,
            'endereco_compl' => new Column(['title' => __('models/ipcontaipEstimadas.fields.endereco_compl'), 'data' => 'endereco_compl'])
,
            'endereco_bairro' => new Column(['title' => __('models/ipcontaipEstimadas.fields.endereco_bairro'), 'data' => 'endereco_bairro'])
,
            'endereco_municipio_uf_cep' => new Column(['title' => __('models/ipcontaipEstimadas.fields.endereco_municipio_uf_cep'), 'data' => 'endereco_municipio_uf_cep'])
,
            'cod_contrato' => new Column(['title' => __('models/ipcontaipEstimadas.fields.cod_contrato'), 'data' => 'cod_contrato'])
,
            'qtd_conceito' => new Column(['title' => __('models/ipcontaipEstimadas.fields.qtd_conceito'), 'data' => 'qtd_conceito'])
,
            'tensao_fornecimento' => new Column(['title' => __('models/ipcontaipEstimadas.fields.tensao_fornecimento'), 'data' => 'tensao_fornecimento'])
,
            'multa' => new Column(['title' => __('models/ipcontaipEstimadas.fields.multa'), 'data' => 'multa'])
,
            'juros' => new Column(['title' => __('models/ipcontaipEstimadas.fields.juros'), 'data' => 'juros'])
,
            'outros' => new Column(['title' => __('models/ipcontaipEstimadas.fields.outros'), 'data' => 'outros'])
,
            'variacao_percentual' => new Column(['title' => __('models/ipcontaipEstimadas.fields.variacao_percentual'), 'data' => 'variacao_percentual'])
,
            'tipo_fatura' => new Column(['title' => __('models/ipcontaipEstimadas.fields.tipo_fatura'), 'data' => 'tipo_fatura'])
,
            'cod_tarifa' => new Column(['title' => __('models/ipcontaipEstimadas.fields.cod_tarifa'), 'data' => 'cod_tarifa'])
,
            'preco_conceito' => new Column(['title' => __('models/ipcontaipEstimadas.fields.preco_conceito'), 'data' => 'preco_conceito'])
,
            'valor_final_com_imposto' => new Column(['title' => __('models/ipcontaipEstimadas.fields.valor_final_com_imposto'), 'data' => 'valor_final_com_imposto'])
,
            'valor_a_ser_faturado' => new Column(['title' => __('models/ipcontaipEstimadas.fields.valor_a_ser_faturado'), 'data' => 'valor_a_ser_faturado'])
,
            'contaipano' => new Column(['title' => __('models/ipcontaipEstimadas.fields.contaipano'), 'data' => 'contaipano'])
,
            'contaipmes' => new Column(['title' => __('models/ipcontaipEstimadas.fields.contaipmes'), 'data' => 'contaipmes'])
,
            'contaipdatainclusao' => new Column(['title' => __('models/ipcontaipEstimadas.fields.contaipdatainclusao'), 'data' => 'contaipdatainclusao'])
,
            'idusuario' => new Column(['title' => __('models/ipcontaipEstimadas.fields.idusuario'), 'data' => 'usuario.nome'])
,
            'novo_contrato_cadastrado' => new Column(['title' => __('models/ipcontaipEstimadas.fields.novo_contrato_cadastrado'), 'data' => 'novo_contrato_cadastrado'])
,
            'pagamento' => new Column(['title' => __('models/ipcontaipEstimadas.fields.pagamento'), 'data' => 'pagamento'])
,
            'versao_mobile' => new Column(['title' => __('models/ipcontaipEstimadas.fields.versao_mobile'), 'data' => 'versao_mobile'])
,
            'segmento' => new Column(['title' => __('models/ipcontaipEstimadas.fields.segmento'), 'data' => 'segmento'])
,
            'fatura_numero' => new Column(['title' => __('models/ipcontaipEstimadas.fields.fatura_numero'), 'data' => 'fatura_numero'])
,
            'fatura_mes' => new Column(['title' => __('models/ipcontaipEstimadas.fields.fatura_mes'), 'data' => 'fatura_mes'])
,
            'fatura_ano' => new Column(['title' => __('models/ipcontaipEstimadas.fields.fatura_ano'), 'data' => 'fatura_ano'])
,
            'idfillowup' => new Column(['title' => __('models/ipcontaipEstimadas.fields.idfillowup'), 'data' => 'idfillowup'])
,
            'conta_entregue_fisicamente' => new Column(['title' => __('models/ipcontaipEstimadas.fields.conta_entregue_fisicamente'), 'data' => 'conta_entregue_fisicamente'])
,
            'status_conta_fisica' => new Column(['title' => __('models/ipcontaipEstimadas.fields.status_conta_fisica'), 'data' => 'status_conta_fisica'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ipcontaip_estimadasdatatable_' . time();
    }
}
