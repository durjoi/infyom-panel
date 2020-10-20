<?php

namespace App\DataTables;

use App\Models\Digitacao_cadastros;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class Digitacao_cadastrosDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'digitacao_cadastros.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Digitacao_cadastros $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Digitacao_cadastros $model)
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
            'cidade' => new Column(['title' => __('models/digitacaoCadastros.fields.cidade'), 'data' => 'cidade'])
,
            'bairro' => new Column(['title' => __('models/digitacaoCadastros.fields.bairro'), 'data' => 'bairro'])
,
            'lograduro' => new Column(['title' => __('models/digitacaoCadastros.fields.lograduro'), 'data' => 'lograduro'])
,
            'visavis' => new Column(['title' => __('models/digitacaoCadastros.fields.visavis'), 'data' => 'visavis'])
,
            'referncia' => new Column(['title' => __('models/digitacaoCadastros.fields.referncia'), 'data' => 'referncia'])
,
            'transformador' => new Column(['title' => __('models/digitacaoCadastros.fields.transformador'), 'data' => 'transformador'])
,
            'medidor' => new Column(['title' => __('models/digitacaoCadastros.fields.medidor'), 'data' => 'medidor'])
,
            'poste_numero' => new Column(['title' => __('models/digitacaoCadastros.fields.poste_numero'), 'data' => 'poste_numero'])
,
            'luminaria_numero' => new Column(['title' => __('models/digitacaoCadastros.fields.luminaria_numero'), 'data' => 'luminaria_numero'])
,
            'coordenada_x' => new Column(['title' => __('models/digitacaoCadastros.fields.coordenada_x'), 'data' => 'coordenada_x'])
,
            'coordenada_y' => new Column(['title' => __('models/digitacaoCadastros.fields.coordenada_y'), 'data' => 'coordenada_y'])
,
            'poste_propriedade' => new Column(['title' => __('models/digitacaoCadastros.fields.poste_propriedade'), 'data' => 'poste_propriedade'])
,
            'poste_status' => new Column(['title' => __('models/digitacaoCadastros.fields.poste_status'), 'data' => 'poste_status'])
,
            'fase_ligacao' => new Column(['title' => __('models/digitacaoCadastros.fields.fase_ligacao'), 'data' => 'fase_ligacao'])
,
            'luminaria_propriedade' => new Column(['title' => __('models/digitacaoCadastros.fields.luminaria_propriedade'), 'data' => 'luminaria_propriedade'])
,
            'luminaria_estado' => new Column(['title' => __('models/digitacaoCadastros.fields.luminaria_estado'), 'data' => 'luminaria_estado'])
,
            'quantidade_lampada' => new Column(['title' => __('models/digitacaoCadastros.fields.quantidade_lampada'), 'data' => 'quantidade_lampada'])
,
            'observacoes' => new Column(['title' => __('models/digitacaoCadastros.fields.observacoes'), 'data' => 'observacoes'])
,
            'data_cadastro' => new Column(['title' => __('models/digitacaoCadastros.fields.data_cadastro'), 'data' => 'data_cadastro'])
,
            'cadastrador' => new Column(['title' => __('models/digitacaoCadastros.fields.cadastrador'), 'data' => 'cadastrador'])
,
            'incluidodoem' => new Column(['title' => __('models/digitacaoCadastros.fields.incluidodoem'), 'data' => 'incluidodoem'])
,
            'idra' => new Column(['title' => __('models/digitacaoCadastros.fields.idra'), 'data' => 'ra.ra_descricao'])
,
            'id_logradouro_tipo' => new Column(['title' => __('models/digitacaoCadastros.fields.id_logradouro_tipo'), 'data' => 'logradouro_tipo.logradouro_tipo_abreviado'])
,
            'id_rede' => new Column(['title' => __('models/digitacaoCadastros.fields.id_rede'), 'data' => 'rede.rede_descricao'])
,
            'id_poste' => new Column(['title' => __('models/digitacaoCadastros.fields.id_poste'), 'data' => 'poste.poste_descricao'])
,
            'id_lampada' => new Column(['title' => __('models/digitacaoCadastros.fields.id_lampada'), 'data' => 'lampada.lampada_descricao'])
,
            'id_rele' => new Column(['title' => __('models/digitacaoCadastros.fields.id_rele'), 'data' => 'rele.rele_descricao'])
,
            'id_reator' => new Column(['title' => __('models/digitacaoCadastros.fields.id_reator'), 'data' => 'reator.reator_descricao'])
,
            'id_objeto_iluminado' => new Column(['title' => __('models/digitacaoCadastros.fields.id_objeto_iluminado'), 'data' => 'objeto_iluminado.objeto_iluminado_descricao'])
,
            'id_usuario' => new Column(['title' => __('models/digitacaoCadastros.fields.id_usuario'), 'data' => 'usuario.nome'])

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'digitacao_cadastrosdatatable_' . time();
    }
}
