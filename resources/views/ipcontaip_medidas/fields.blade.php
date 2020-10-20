<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/ipcontaipMedidas.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Concessionaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_concessionaria', __('models/ipcontaipMedidas.fields.nome_concessionaria').':') !!}
    {!! Form::text('nome_concessionaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', __('models/ipcontaipMedidas.fields.nome').':') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Compl Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compl_nome', __('models/ipcontaipMedidas.fields.compl_nome').':') !!}
    {!! Form::text('compl_nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Idsecretaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsecretaria', __('models/ipcontaipMedidas.fields.idsecretaria').':') !!}
    {!! Form::text('idsecretaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_fatura', __('models/ipcontaipMedidas.fields.num_fatura').':') !!}
    {!! Form::text('num_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Vencimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_vencimento', __('models/ipcontaipMedidas.fields.data_vencimento').':') !!}
    {!! Form::date('data_vencimento', null, ['class' => 'form-control','id'=>'data_vencimento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_vencimento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Endereco Rua Av Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_rua_av', __('models/ipcontaipMedidas.fields.endereco_rua_av').':') !!}
    {!! Form::text('endereco_rua_av', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Compl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_compl', __('models/ipcontaipMedidas.fields.endereco_compl').':') !!}
    {!! Form::text('endereco_compl', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_bairro', __('models/ipcontaipMedidas.fields.endereco_bairro').':') !!}
    {!! Form::text('endereco_bairro', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Municipio Uf Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_municipio_uf_cep', __('models/ipcontaipMedidas.fields.endereco_municipio_uf_cep').':') !!}
    {!! Form::text('endereco_municipio_uf_cep', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_contrato', __('models/ipcontaipMedidas.fields.cod_contrato').':') !!}
    {!! Form::number('cod_contrato', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Medidor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_medidor', __('models/ipcontaipMedidas.fields.num_medidor').':') !!}
    {!! Form::text('num_medidor', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Leit Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_leit_anterior', __('models/ipcontaipMedidas.fields.data_leit_anterior').':') !!}
    {!! Form::date('data_leit_anterior', null, ['class' => 'form-control','id'=>'data_leit_anterior']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_leit_anterior').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Data Leit Atual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_leit_atual', __('models/ipcontaipMedidas.fields.data_leit_atual').':') !!}
    {!! Form::date('data_leit_atual', null, ['class' => 'form-control','id'=>'data_leit_atual']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_leit_atual').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Leitura Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('leitura_anterior', __('models/ipcontaipMedidas.fields.leitura_anterior').':') !!}
    {!! Form::number('leitura_anterior', null, ['class' => 'form-control']) !!}
</div>


<!-- Leitura Atual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('leitura_atual', __('models/ipcontaipMedidas.fields.leitura_atual').':') !!}
    {!! Form::number('leitura_atual', null, ['class' => 'form-control']) !!}
</div>


<!-- Qtd Conceito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtd_conceito', __('models/ipcontaipMedidas.fields.qtd_conceito').':') !!}
    {!! Form::number('qtd_conceito', null, ['class' => 'form-control']) !!}
</div>


<!-- Diferenca Leituras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diferenca_leituras', __('models/ipcontaipMedidas.fields.diferenca_leituras').':') !!}
    {!! Form::number('diferenca_leituras', null, ['class' => 'form-control']) !!}
</div>


<!-- Constante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('constante', __('models/ipcontaipMedidas.fields.constante').':') !!}
    {!! Form::number('constante', null, ['class' => 'form-control']) !!}
</div>


<!-- Consumo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('consumo', __('models/ipcontaipMedidas.fields.consumo').':') !!}
    {!! Form::number('consumo', null, ['class' => 'form-control']) !!}
</div>


<!-- Tensao Fornecimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tensao_fornecimento', __('models/ipcontaipMedidas.fields.tensao_fornecimento').':') !!}
    {!! Form::text('tensao_fornecimento', null, ['class' => 'form-control']) !!}
</div>


<!-- Multa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('multa', __('models/ipcontaipMedidas.fields.multa').':') !!}
    {!! Form::number('multa', null, ['class' => 'form-control']) !!}
</div>


<!-- Juros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juros', __('models/ipcontaipMedidas.fields.juros').':') !!}
    {!! Form::number('juros', null, ['class' => 'form-control']) !!}
</div>


<!-- Outros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outros', __('models/ipcontaipMedidas.fields.outros').':') !!}
    {!! Form::number('outros', null, ['class' => 'form-control']) !!}
</div>


<!-- Variacao Percentual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('variacao_percentual', __('models/ipcontaipMedidas.fields.variacao_percentual').':') !!}
    {!! Form::number('variacao_percentual', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_fatura', __('models/ipcontaipMedidas.fields.tipo_fatura').':') !!}
    {!! Form::text('tipo_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Tarifa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_tarifa', __('models/ipcontaipMedidas.fields.cod_tarifa').':') !!}
    {!! Form::text('cod_tarifa', null, ['class' => 'form-control']) !!}
</div>


<!-- Preco Conceito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco_conceito', __('models/ipcontaipMedidas.fields.preco_conceito').':') !!}
    {!! Form::number('preco_conceito', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Final Com Imposto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_final_com_imposto', __('models/ipcontaipMedidas.fields.valor_final_com_imposto').':') !!}
    {!! Form::number('valor_final_com_imposto', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor A Ser Faturado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_a_ser_faturado', __('models/ipcontaipMedidas.fields.valor_a_ser_faturado').':') !!}
    {!! Form::number('valor_a_ser_faturado', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipano', __('models/ipcontaipMedidas.fields.contaipano').':') !!}
    {!! Form::number('contaipano', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipmes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipmes', __('models/ipcontaipMedidas.fields.contaipmes').':') !!}
    {!! Form::text('contaipmes', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipdatainclusao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipdatainclusao', __('models/ipcontaipMedidas.fields.contaipdatainclusao').':') !!}
    {!! Form::date('contaipdatainclusao', null, ['class' => 'form-control','id'=>'contaipdatainclusao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#contaipdatainclusao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuario', __('models/ipcontaipMedidas.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Novo Contrato Cadastrado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('novo_contrato_cadastrado', __('models/ipcontaipMedidas.fields.novo_contrato_cadastrado').':') !!}
    {!! Form::text('novo_contrato_cadastrado', null, ['class' => 'form-control']) !!}
</div>


<!-- Pagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pagamento', __('models/ipcontaipMedidas.fields.pagamento').':') !!}
    {!! Form::text('pagamento', null, ['class' => 'form-control']) !!}
</div>


<!-- Versao Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('versao_mobile', __('models/ipcontaipMedidas.fields.versao_mobile').':') !!}
    {!! Form::text('versao_mobile', null, ['class' => 'form-control']) !!}
</div>


<!-- Segmento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segmento', __('models/ipcontaipMedidas.fields.segmento').':') !!}
    {!! Form::text('segmento', null, ['class' => 'form-control']) !!}
</div>


<!-- Unidade Fiscalizada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_fiscalizada', __('models/ipcontaipMedidas.fields.unidade_fiscalizada').':') !!}
    {!! Form::text('unidade_fiscalizada', null, ['class' => 'form-control']) !!}
</div>


<!-- Unidade Fiscalizada Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_fiscalizada_data', __('models/ipcontaipMedidas.fields.unidade_fiscalizada_data').':') !!}
    {!! Form::date('unidade_fiscalizada_data', null, ['class' => 'form-control','id'=>'unidade_fiscalizada_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#unidade_fiscalizada_data').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Unidade Fiscalizada Parecer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_fiscalizada_parecer', __('models/ipcontaipMedidas.fields.unidade_fiscalizada_parecer').':') !!}
    {!! Form::text('unidade_fiscalizada_parecer', null, ['class' => 'form-control']) !!}
</div>


<!-- Unidade Fiscalizada Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_fiscalizada_observacao', __('models/ipcontaipMedidas.fields.unidade_fiscalizada_observacao').':') !!}
    {!! Form::text('unidade_fiscalizada_observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Fatura Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatura_numero', __('models/ipcontaipMedidas.fields.fatura_numero').':') !!}
    {!! Form::text('fatura_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Fatura Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatura_mes', __('models/ipcontaipMedidas.fields.fatura_mes').':') !!}
    {!! Form::text('fatura_mes', null, ['class' => 'form-control']) !!}
</div>


<!-- Fatura Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatura_ano', __('models/ipcontaipMedidas.fields.fatura_ano').':') !!}
    {!! Form::number('fatura_ano', null, ['class' => 'form-control']) !!}
</div>


<!-- Idfollowup Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfollowup', __('models/ipcontaipMedidas.fields.idfollowup').':') !!}
    {!! Form::text('idfollowup', null, ['class' => 'form-control']) !!}
</div>


<!-- Conta Entregue Fisicamente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conta_entregue_fisicamente', __('models/ipcontaipMedidas.fields.conta_entregue_fisicamente').':') !!}
    {!! Form::number('conta_entregue_fisicamente', null, ['class' => 'form-control']) !!}
</div>


<!-- Status Conta Fisica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_conta_fisica', __('models/ipcontaipMedidas.fields.status_conta_fisica').':') !!}
    {!! Form::text('status_conta_fisica', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ipcontaipMedidas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
