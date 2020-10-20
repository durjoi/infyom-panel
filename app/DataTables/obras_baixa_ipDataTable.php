<?php

namespace App\DataTables;

use App\Models\obras_baixa_ip;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class obras_baixa_ipDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'obras_baixa_ips.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\obras_baixa_ip $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(obras_baixa_ip $model)
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
            'idcidade' => new Column(['title' => __('models/obrasBaixaIps.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'idobras' => new Column(['title' => __('models/obrasBaixaIps.fields.idobras'), 'data' => 'obras.protocolo'])
,
            'idra' => new Column(['title' => __('models/obrasBaixaIps.fields.idra'), 'data' => 'ra.ra_descricao'])
,
            'idbairro' => new Column(['title' => __('models/obrasBaixaIps.fields.idbairro'), 'data' => 'bairro.bairro_descricao'])
,
            'idlogradouro' => new Column(['title' => __('models/obrasBaixaIps.fields.idlogradouro'), 'data' => 'logradouro.logradouro_descricao'])
,
            'idposte' => new Column(['title' => __('models/obrasBaixaIps.fields.idposte'), 'data' => 'poste.poste_descricao'])
,
            'poste_numero' => new Column(['title' => __('models/obrasBaixaIps.fields.poste_numero'), 'data' => 'poste_numero'])
,
            'coordenada_x' => new Column(['title' => __('models/obrasBaixaIps.fields.coordenada_x'), 'data' => 'coordenada_x'])
,
            'coordenada_y' => new Column(['title' => __('models/obrasBaixaIps.fields.coordenada_y'), 'data' => 'coordenada_y'])
,
            'visavis' => new Column(['title' => __('models/obrasBaixaIps.fields.visavis'), 'data' => 'visavis'])
,
            'referencia' => new Column(['title' => __('models/obrasBaixaIps.fields.referencia'), 'data' => 'referencia'])
,
            'poste_propriedade' => new Column(['title' => __('models/obrasBaixaIps.fields.poste_propriedade'), 'data' => 'poste_propriedade'])
,
            'poste_status' => new Column(['title' => __('models/obrasBaixaIps.fields.poste_status'), 'data' => 'poste_status'])
,
            'poste_data_instalacao' => new Column(['title' => __('models/obrasBaixaIps.fields.poste_data_instalacao'), 'data' => 'poste_data_instalacao'])
,
            'idsuporte' => new Column(['title' => __('models/obrasBaixaIps.fields.idsuporte'), 'data' => 'suporte.suporte_descricao'])
,
            'suporte_data_instalacao' => new Column(['title' => __('models/obrasBaixaIps.fields.suporte_data_instalacao'), 'data' => 'suporte_data_instalacao'])
,
            'idluminaria' => new Column(['title' => __('models/obrasBaixaIps.fields.idluminaria'), 'data' => 'luminaria.luminaria_descricao'])
,
            'luminaria_numero' => new Column(['title' => __('models/obrasBaixaIps.fields.luminaria_numero'), 'data' => 'luminaria_numero'])
,
            'fase_ligacao' => new Column(['title' => __('models/obrasBaixaIps.fields.fase_ligacao'), 'data' => 'fase_ligacao'])
,
            'altura_montagem' => new Column(['title' => __('models/obrasBaixaIps.fields.altura_montagem'), 'data' => 'altura_montagem'])
,
            'luminaria_data_instalacao' => new Column(['title' => __('models/obrasBaixaIps.fields.luminaria_data_instalacao'), 'data' => 'luminaria_data_instalacao'])
,
            'idlampada' => new Column(['title' => __('models/obrasBaixaIps.fields.idlampada'), 'data' => 'lampada.lampada_descricao'])
,
            'quantidade_lampada' => new Column(['title' => __('models/obrasBaixaIps.fields.quantidade_lampada'), 'data' => 'quantidade_lampada'])
,
            'horas_ligada' => new Column(['title' => __('models/obrasBaixaIps.fields.horas_ligada'), 'data' => 'horas_ligada'])
,
            'lampada_data_instalacao' => new Column(['title' => __('models/obrasBaixaIps.fields.lampada_data_instalacao'), 'data' => 'lampada_data_instalacao'])
,
            'idreator' => new Column(['title' => __('models/obrasBaixaIps.fields.idreator'), 'data' => 'reator.reator_descricao'])
,
            'reator_data_instalacao' => new Column(['title' => __('models/obrasBaixaIps.fields.reator_data_instalacao'), 'data' => 'reator_data_instalacao'])
,
            'idrele' => new Column(['title' => __('models/obrasBaixaIps.fields.idrele'), 'data' => 'rele.rele_descricao'])
,
            'rele_data_instalacao' => new Column(['title' => __('models/obrasBaixaIps.fields.rele_data_instalacao'), 'data' => 'rele_data_instalacao'])
,
            'idrede' => new Column(['title' => __('models/obrasBaixaIps.fields.idrede'), 'data' => 'rede.rede_descricao'])
,
            'idtransformador' => new Column(['title' => __('models/obrasBaixaIps.fields.idtransformador'), 'data' => 'transformador.codigo'])
,
            'idmedidor' => new Column(['title' => __('models/obrasBaixaIps.fields.idmedidor'), 'data' => 'medidor.numero'])
,
            'medidor_data_instalacao' => new Column(['title' => __('models/obrasBaixaIps.fields.medidor_data_instalacao'), 'data' => 'medidor_data_instalacao'])
,
            'idobjetoiluminado' => new Column(['title' => __('models/obrasBaixaIps.fields.idobjetoiluminado'), 'data' => 'objetoiluminado.objeto_iluminado_descricao'])
,
            'idtarifa' => new Column(['title' => __('models/obrasBaixaIps.fields.idtarifa'), 'data' => 'tarifa.valor'])
,
            'observacoes' => new Column(['title' => __('models/obrasBaixaIps.fields.observacoes'), 'data' => 'observacoes'])
,
            'situacao' => new Column(['title' => __('models/obrasBaixaIps.fields.situacao'), 'data' => 'situacao'])
,
            'data_atualizado' => new Column(['title' => __('models/obrasBaixaIps.fields.data_atualizado'), 'data' => 'data_atualizado'])
,
            'incluidoem' => new Column(['title' => __('models/obrasBaixaIps.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuarioi' => new Column(['title' => __('models/obrasBaixaIps.fields.idusuarioi'), 'data' => 'usuarioi.nome'])
,
            'idtiposolicitacao' => new Column(['title' => __('models/obrasBaixaIps.fields.idtiposolicitacao'), 'data' => 'tiposolicitacao.tiposolicitacao_descricao'])
,
            'poste_anterior' => new Column(['title' => __('models/obrasBaixaIps.fields.poste_anterior'), 'data' => 'poste_anterior'])
,
            'poste_posterior' => new Column(['title' => __('models/obrasBaixaIps.fields.poste_posterior'), 'data' => 'poste_posterior'])
,
            'idsuporte_anterior' => new Column(['title' => __('models/obrasBaixaIps.fields.idsuporte_anterior'), 'data' => 'suporte_anterior.suporte_descricao'])
,
            'idluminaria_anterior' => new Column(['title' => __('models/obrasBaixaIps.fields.idluminaria_anterior'), 'data' => 'luminaria_anterior.luminaria_descricao'])
,
            'idlampada_anterior' => new Column(['title' => __('models/obrasBaixaIps.fields.idlampada_anterior'), 'data' => 'lampada_anterior.lampada_descricao'])
,
            'idlampada_anterior_quantidade' => new Column(['title' => __('models/obrasBaixaIps.fields.idlampada_anterior_quantidade'), 'data' => 'idlampada_anterior_quantidade'])
,
            'idreator_anterior' => new Column(['title' => __('models/obrasBaixaIps.fields.idreator_anterior'), 'data' => 'reator_anterior.reator_descricao'])
,
            'fabricante_luminaria' => new Column(['title' => __('models/obrasBaixaIps.fields.fabricante_luminaria'), 'data' => 'fabricante_luminaria'])
,
            'modelo_luminaria' => new Column(['title' => __('models/obrasBaixaIps.fields.modelo_luminaria'), 'data' => 'modelo_luminaria'])
,
            'altura_poste' => new Column(['title' => __('models/obrasBaixaIps.fields.altura_poste'), 'data' => 'altura_poste'])
,
            'modelo_poste' => new Column(['title' => __('models/obrasBaixaIps.fields.modelo_poste'), 'data' => 'modelo_poste'])
,
            'cor_poste' => new Column(['title' => __('models/obrasBaixaIps.fields.cor_poste'), 'data' => 'cor_poste'])
,
            'comprimento_braco' => new Column(['title' => __('models/obrasBaixaIps.fields.comprimento_braco'), 'data' => 'comprimento_braco'])
,
            'propriedade_poste' => new Column(['title' => __('models/obrasBaixaIps.fields.propriedade_poste'), 'data' => 'propriedade_poste'])
,
            'telegestao' => new Column(['title' => __('models/obrasBaixaIps.fields.telegestao'), 'data' => 'telegestao'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'obras_baixa_ipsdatatable_' . time();
    }
}
