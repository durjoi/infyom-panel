<?php

namespace App\DataTables;

use App\Models\ipcontaip_medida;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ipcontaip_medidaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'ipcontaip_medidas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ipcontaip_medida $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ipcontaip_medida $model)
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
            'idcidade' => new Column(['title' => __('models/ipcontaipMedidas.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'nome_concessionaria' => new Column(['title' => __('models/ipcontaipMedidas.fields.nome_concessionaria'), 'data' => 'nome_concessionaria'])
,
            'nome' => new Column(['title' => __('models/ipcontaipMedidas.fields.nome'), 'data' => 'nome'])
,
            'compl_nome' => new Column(['title' => __('models/ipcontaipMedidas.fields.compl_nome'), 'data' => 'compl_nome'])
,
            'idsecretaria' => new Column(['title' => __('models/ipcontaipMedidas.fields.idsecretaria'), 'data' => 'idsecretaria'])
,
            'num_fatura' => new Column(['title' => __('models/ipcontaipMedidas.fields.num_fatura'), 'data' => 'num_fatura'])
,
            'data_vencimento' => new Column(['title' => __('models/ipcontaipMedidas.fields.data_vencimento'), 'data' => 'data_vencimento'])
,
            'endereco_rua_av' => new Column(['title' => __('models/ipcontaipMedidas.fields.endereco_rua_av'), 'data' => 'endereco_rua_av'])
,
            'endereco_compl' => new Column(['title' => __('models/ipcontaipMedidas.fields.endereco_compl'), 'data' => 'endereco_compl'])
,
            'endereco_bairro' => new Column(['title' => __('models/ipcontaipMedidas.fields.endereco_bairro'), 'data' => 'endereco_bairro'])
,
            'endereco_municipio_uf_cep' => new Column(['title' => __('models/ipcontaipMedidas.fields.endereco_municipio_uf_cep'), 'data' => 'endereco_municipio_uf_cep'])
,
            'cod_contrato' => new Column(['title' => __('models/ipcontaipMedidas.fields.cod_contrato'), 'data' => 'cod_contrato'])
,
            'num_medidor' => new Column(['title' => __('models/ipcontaipMedidas.fields.num_medidor'), 'data' => 'num_medidor'])
,
            'data_leit_anterior' => new Column(['title' => __('models/ipcontaipMedidas.fields.data_leit_anterior'), 'data' => 'data_leit_anterior'])
,
            'data_leit_atual' => new Column(['title' => __('models/ipcontaipMedidas.fields.data_leit_atual'), 'data' => 'data_leit_atual'])
,
            'leitura_anterior' => new Column(['title' => __('models/ipcontaipMedidas.fields.leitura_anterior'), 'data' => 'leitura_anterior'])
,
            'leitura_atual' => new Column(['title' => __('models/ipcontaipMedidas.fields.leitura_atual'), 'data' => 'leitura_atual'])
,
            'qtd_conceito' => new Column(['title' => __('models/ipcontaipMedidas.fields.qtd_conceito'), 'data' => 'qtd_conceito'])
,
            'diferenca_leituras' => new Column(['title' => __('models/ipcontaipMedidas.fields.diferenca_leituras'), 'data' => 'diferenca_leituras'])
,
            'constante' => new Column(['title' => __('models/ipcontaipMedidas.fields.constante'), 'data' => 'constante'])
,
            'consumo' => new Column(['title' => __('models/ipcontaipMedidas.fields.consumo'), 'data' => 'consumo'])
,
            'tensao_fornecimento' => new Column(['title' => __('models/ipcontaipMedidas.fields.tensao_fornecimento'), 'data' => 'tensao_fornecimento'])
,
            'multa' => new Column(['title' => __('models/ipcontaipMedidas.fields.multa'), 'data' => 'multa'])
,
            'juros' => new Column(['title' => __('models/ipcontaipMedidas.fields.juros'), 'data' => 'juros'])
,
            'outros' => new Column(['title' => __('models/ipcontaipMedidas.fields.outros'), 'data' => 'outros'])
,
            'variacao_percentual' => new Column(['title' => __('models/ipcontaipMedidas.fields.variacao_percentual'), 'data' => 'variacao_percentual'])
,
            'tipo_fatura' => new Column(['title' => __('models/ipcontaipMedidas.fields.tipo_fatura'), 'data' => 'tipo_fatura'])
,
            'cod_tarifa' => new Column(['title' => __('models/ipcontaipMedidas.fields.cod_tarifa'), 'data' => 'cod_tarifa'])
,
            'preco_conceito' => new Column(['title' => __('models/ipcontaipMedidas.fields.preco_conceito'), 'data' => 'preco_conceito'])
,
            'valor_final_com_imposto' => new Column(['title' => __('models/ipcontaipMedidas.fields.valor_final_com_imposto'), 'data' => 'valor_final_com_imposto'])
,
            'valor_a_ser_faturado' => new Column(['title' => __('models/ipcontaipMedidas.fields.valor_a_ser_faturado'), 'data' => 'valor_a_ser_faturado'])
,
            'contaipano' => new Column(['title' => __('models/ipcontaipMedidas.fields.contaipano'), 'data' => 'contaipano'])
,
            'contaipmes' => new Column(['title' => __('models/ipcontaipMedidas.fields.contaipmes'), 'data' => 'contaipmes'])
,
            'contaipdatainclusao' => new Column(['title' => __('models/ipcontaipMedidas.fields.contaipdatainclusao'), 'data' => 'contaipdatainclusao'])
,
            'idusuario' => new Column(['title' => __('models/ipcontaipMedidas.fields.idusuario'), 'data' => 'usuario.nome'])
,
            'novo_contrato_cadastrado' => new Column(['title' => __('models/ipcontaipMedidas.fields.novo_contrato_cadastrado'), 'data' => 'novo_contrato_cadastrado'])
,
            'pagamento' => new Column(['title' => __('models/ipcontaipMedidas.fields.pagamento'), 'data' => 'pagamento'])
,
            'versao_mobile' => new Column(['title' => __('models/ipcontaipMedidas.fields.versao_mobile'), 'data' => 'versao_mobile'])
,
            'segmento' => new Column(['title' => __('models/ipcontaipMedidas.fields.segmento'), 'data' => 'segmento'])
,
            'unidade_fiscalizada' => new Column(['title' => __('models/ipcontaipMedidas.fields.unidade_fiscalizada'), 'data' => 'unidade_fiscalizada'])
,
            'unidade_fiscalizada_data' => new Column(['title' => __('models/ipcontaipMedidas.fields.unidade_fiscalizada_data'), 'data' => 'unidade_fiscalizada_data'])
,
            'unidade_fiscalizada_parecer' => new Column(['title' => __('models/ipcontaipMedidas.fields.unidade_fiscalizada_parecer'), 'data' => 'unidade_fiscalizada_parecer'])
,
            'unidade_fiscalizada_observacao' => new Column(['title' => __('models/ipcontaipMedidas.fields.unidade_fiscalizada_observacao'), 'data' => 'unidade_fiscalizada_observacao'])
,
            'fatura_numero' => new Column(['title' => __('models/ipcontaipMedidas.fields.fatura_numero'), 'data' => 'fatura_numero'])
,
            'fatura_mes' => new Column(['title' => __('models/ipcontaipMedidas.fields.fatura_mes'), 'data' => 'fatura_mes'])
,
            'fatura_ano' => new Column(['title' => __('models/ipcontaipMedidas.fields.fatura_ano'), 'data' => 'fatura_ano'])
,
            'idfollowup' => new Column(['title' => __('models/ipcontaipMedidas.fields.idfollowup'), 'data' => 'idfollowup'])
,
            'conta_entregue_fisicamente' => new Column(['title' => __('models/ipcontaipMedidas.fields.conta_entregue_fisicamente'), 'data' => 'conta_entregue_fisicamente'])
,
            'status_conta_fisica' => new Column(['title' => __('models/ipcontaipMedidas.fields.status_conta_fisica'), 'data' => 'status_conta_fisica'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ipcontaip_medidasdatatable_' . time();
    }
}
