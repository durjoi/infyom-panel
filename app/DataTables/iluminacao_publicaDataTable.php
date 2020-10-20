<?php

namespace App\DataTables;

use App\Models\iluminacao_publica;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class iluminacao_publicaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'iluminacao_publicas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\iluminacao_publica $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(iluminacao_publica $model)
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
            'idcidade' => new Column(['title' => __('models/iluminacaoPublicas.fields.idcidade'), 'data' => 'cidade.descricao'])
,
            'idra' => new Column(['title' => __('models/iluminacaoPublicas.fields.idra'), 'data' => 'ra.ra_descricao'])
,
            'idbairro' => new Column(['title' => __('models/iluminacaoPublicas.fields.idbairro'), 'data' => 'bairro.bairro_descricao'])
,
            'idlogradouro' => new Column(['title' => __('models/iluminacaoPublicas.fields.idlogradouro'), 'data' => 'logradouro.logradouro_descricao'])
,
            'idposte' => new Column(['title' => __('models/iluminacaoPublicas.fields.idposte'), 'data' => 'poste.poste_descricao'])
,
            'poste_numero' => new Column(['title' => __('models/iluminacaoPublicas.fields.poste_numero'), 'data' => 'poste_numero'])
,
            'coordenada_x' => new Column(['title' => __('models/iluminacaoPublicas.fields.coordenada_x'), 'data' => 'coordenada_x'])
,
            'coordenada_y' => new Column(['title' => __('models/iluminacaoPublicas.fields.coordenada_y'), 'data' => 'coordenada_y'])
,
            'visavis' => new Column(['title' => __('models/iluminacaoPublicas.fields.visavis'), 'data' => 'visavis'])
,
            'referencia' => new Column(['title' => __('models/iluminacaoPublicas.fields.referencia'), 'data' => 'referencia'])
,
            'poste_propriedade' => new Column(['title' => __('models/iluminacaoPublicas.fields.poste_propriedade'), 'data' => 'poste_propriedade'])
,
            'poste_status' => new Column(['title' => __('models/iluminacaoPublicas.fields.poste_status'), 'data' => 'poste_status'])
,
            'poste_data_instalacao' => new Column(['title' => __('models/iluminacaoPublicas.fields.poste_data_instalacao'), 'data' => 'poste_data_instalacao'])
,
            'idsuporte' => new Column(['title' => __('models/iluminacaoPublicas.fields.idsuporte'), 'data' => 'suporte.suporte_descricao'])
,
            'suporte_data_instalacao' => new Column(['title' => __('models/iluminacaoPublicas.fields.suporte_data_instalacao'), 'data' => 'suporte_data_instalacao'])
,
            'idluminaria' => new Column(['title' => __('models/iluminacaoPublicas.fields.idluminaria'), 'data' => 'luminaria.luminaria_descricao'])
,
            'luminaria_numero' => new Column(['title' => __('models/iluminacaoPublicas.fields.luminaria_numero'), 'data' => 'luminaria_numero'])
,
            'fase_ligacao' => new Column(['title' => __('models/iluminacaoPublicas.fields.fase_ligacao'), 'data' => 'fase_ligacao'])
,
            'altura_montagem' => new Column(['title' => __('models/iluminacaoPublicas.fields.altura_montagem'), 'data' => 'altura_montagem'])
,
            'luminaria_data_instalacao' => new Column(['title' => __('models/iluminacaoPublicas.fields.luminaria_data_instalacao'), 'data' => 'luminaria_data_instalacao'])
,
            'idlampada' => new Column(['title' => __('models/iluminacaoPublicas.fields.idlampada'), 'data' => 'lampada.lampada_descricao'])
,
            'quantidade_lampada' => new Column(['title' => __('models/iluminacaoPublicas.fields.quantidade_lampada'), 'data' => 'quantidade_lampada'])
,
            'horas_ligada' => new Column(['title' => __('models/iluminacaoPublicas.fields.horas_ligada'), 'data' => 'horas_ligada'])
,
            'lampada_data_instalacao' => new Column(['title' => __('models/iluminacaoPublicas.fields.lampada_data_instalacao'), 'data' => 'lampada_data_instalacao'])
,
            'idreator' => new Column(['title' => __('models/iluminacaoPublicas.fields.idreator'), 'data' => 'reator.reator_descricao'])
,
            'reator_data_instalacao' => new Column(['title' => __('models/iluminacaoPublicas.fields.reator_data_instalacao'), 'data' => 'reator_data_instalacao'])
,
            'idrele' => new Column(['title' => __('models/iluminacaoPublicas.fields.idrele'), 'data' => 'rele.rele_descricao'])
,
            'rele_data_instalacao' => new Column(['title' => __('models/iluminacaoPublicas.fields.rele_data_instalacao'), 'data' => 'rele_data_instalacao'])
,
            'idrede' => new Column(['title' => __('models/iluminacaoPublicas.fields.idrede'), 'data' => 'rede.rede_descricao'])
,
            'idtransformador' => new Column(['title' => __('models/iluminacaoPublicas.fields.idtransformador'), 'data' => 'transformador.codigo'])
,
            'idmedidor' => new Column(['title' => __('models/iluminacaoPublicas.fields.idmedidor'), 'data' => 'medidor.numero'])
,
            'medidor_data_instalacao' => new Column(['title' => __('models/iluminacaoPublicas.fields.medidor_data_instalacao'), 'data' => 'medidor_data_instalacao'])
,
            'idobjetoiluminado' => new Column(['title' => __('models/iluminacaoPublicas.fields.idobjetoiluminado'), 'data' => 'objetoiluminado.objeto_iluminado_descricao'])
,
            'idtarifa' => new Column(['title' => __('models/iluminacaoPublicas.fields.idtarifa'), 'data' => 'tarifa.valor'])
,
            'observacoes' => new Column(['title' => __('models/iluminacaoPublicas.fields.observacoes'), 'data' => 'observacoes'])
,
            'demanda_w' => new Column(['title' => __('models/iluminacaoPublicas.fields.demanda_w'), 'data' => 'demanda_w'])
,
            'consumo_kwh' => new Column(['title' => __('models/iluminacaoPublicas.fields.consumo_kwh'), 'data' => 'consumo_kwh'])
,
            'quantidade_os_pendente' => new Column(['title' => __('models/iluminacaoPublicas.fields.quantidade_os_pendente'), 'data' => 'quantidade_os_pendente'])
,
            'quantidade_os_executada' => new Column(['title' => __('models/iluminacaoPublicas.fields.quantidade_os_executada'), 'data' => 'quantidade_os_executada'])
,
            'quantidade_os_cancelada' => new Column(['title' => __('models/iluminacaoPublicas.fields.quantidade_os_cancelada'), 'data' => 'quantidade_os_cancelada'])
,
            'quantidade_os_normalizada' => new Column(['title' => __('models/iluminacaoPublicas.fields.quantidade_os_normalizada'), 'data' => 'quantidade_os_normalizada'])
,
            'icone' => new Column(['title' => __('models/iluminacaoPublicas.fields.icone'), 'data' => 'icone'])
,
            'incluidoem' => new Column(['title' => __('models/iluminacaoPublicas.fields.incluidoem'), 'data' => 'incluidoem'])
,
            'idusuarioi' => new Column(['title' => __('models/iluminacaoPublicas.fields.idusuarioi'), 'data' => 'usuarioi.nome'])
,
            'alteradoem' => new Column(['title' => __('models/iluminacaoPublicas.fields.alteradoem'), 'data' => 'alteradoem'])
,
            'idusuario' => new Column(['title' => __('models/iluminacaoPublicas.fields.idusuario'), 'data' => 'usuario.nome'])
,
            'cadastro_manual' => new Column(['title' => __('models/iluminacaoPublicas.fields.cadastro_manual'), 'data' => 'cadastro_manual'])
,
            'iddigitacao_cadastro' => new Column(['title' => __('models/iluminacaoPublicas.fields.iddigitacao_cadastro'), 'data' => 'iddigitacao_cadastro'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'iluminacao_publicasdatatable_' . time();
    }
}
