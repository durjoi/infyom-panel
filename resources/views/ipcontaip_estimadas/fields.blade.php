<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/ipcontaipEstimadas.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Concessionaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_concessionaria', __('models/ipcontaipEstimadas.fields.nome_concessionaria').':') !!}
    {!! Form::text('nome_concessionaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', __('models/ipcontaipEstimadas.fields.nome').':') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Compl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_compl', __('models/ipcontaipEstimadas.fields.nome_compl').':') !!}
    {!! Form::text('nome_compl', null, ['class' => 'form-control']) !!}
</div>


<!-- Idsecretaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsecretaria', __('models/ipcontaipEstimadas.fields.idsecretaria').':') !!}
    {!! Form::text('idsecretaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_fatura', __('models/ipcontaipEstimadas.fields.num_fatura').':') !!}
    {!! Form::text('num_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Vencimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_vencimento', __('models/ipcontaipEstimadas.fields.data_vencimento').':') !!}
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
    {!! Form::label('endereco_rua_av', __('models/ipcontaipEstimadas.fields.endereco_rua_av').':') !!}
    {!! Form::text('endereco_rua_av', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Compl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_compl', __('models/ipcontaipEstimadas.fields.endereco_compl').':') !!}
    {!! Form::text('endereco_compl', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_bairro', __('models/ipcontaipEstimadas.fields.endereco_bairro').':') !!}
    {!! Form::text('endereco_bairro', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Municipio Uf Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_municipio_uf_cep', __('models/ipcontaipEstimadas.fields.endereco_municipio_uf_cep').':') !!}
    {!! Form::text('endereco_municipio_uf_cep', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_contrato', __('models/ipcontaipEstimadas.fields.cod_contrato').':') !!}
    {!! Form::number('cod_contrato', null, ['class' => 'form-control']) !!}
</div>


<!-- Qtd Conceito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtd_conceito', __('models/ipcontaipEstimadas.fields.qtd_conceito').':') !!}
    {!! Form::number('qtd_conceito', null, ['class' => 'form-control']) !!}
</div>


<!-- Tensao Fornecimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tensao_fornecimento', __('models/ipcontaipEstimadas.fields.tensao_fornecimento').':') !!}
    {!! Form::text('tensao_fornecimento', null, ['class' => 'form-control']) !!}
</div>


<!-- Multa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('multa', __('models/ipcontaipEstimadas.fields.multa').':') !!}
    {!! Form::number('multa', null, ['class' => 'form-control']) !!}
</div>


<!-- Juros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('juros', __('models/ipcontaipEstimadas.fields.juros').':') !!}
    {!! Form::number('juros', null, ['class' => 'form-control']) !!}
</div>


<!-- Outros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outros', __('models/ipcontaipEstimadas.fields.outros').':') !!}
    {!! Form::number('outros', null, ['class' => 'form-control']) !!}
</div>


<!-- Variacao Percentual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('variacao_percentual', __('models/ipcontaipEstimadas.fields.variacao_percentual').':') !!}
    {!! Form::number('variacao_percentual', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_fatura', __('models/ipcontaipEstimadas.fields.tipo_fatura').':') !!}
    {!! Form::text('tipo_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Tarifa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_tarifa', __('models/ipcontaipEstimadas.fields.cod_tarifa').':') !!}
    {!! Form::text('cod_tarifa', null, ['class' => 'form-control']) !!}
</div>


<!-- Preco Conceito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco_conceito', __('models/ipcontaipEstimadas.fields.preco_conceito').':') !!}
    {!! Form::number('preco_conceito', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Final Com Imposto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_final_com_imposto', __('models/ipcontaipEstimadas.fields.valor_final_com_imposto').':') !!}
    {!! Form::number('valor_final_com_imposto', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor A Ser Faturado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_a_ser_faturado', __('models/ipcontaipEstimadas.fields.valor_a_ser_faturado').':') !!}
    {!! Form::number('valor_a_ser_faturado', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipano', __('models/ipcontaipEstimadas.fields.contaipano').':') !!}
    {!! Form::number('contaipano', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipmes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipmes', __('models/ipcontaipEstimadas.fields.contaipmes').':') !!}
    {!! Form::text('contaipmes', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipdatainclusao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipdatainclusao', __('models/ipcontaipEstimadas.fields.contaipdatainclusao').':') !!}
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
    {!! Form::label('idusuario', __('models/ipcontaipEstimadas.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Novo Contrato Cadastrado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('novo_contrato_cadastrado', __('models/ipcontaipEstimadas.fields.novo_contrato_cadastrado').':') !!}
    {!! Form::text('novo_contrato_cadastrado', null, ['class' => 'form-control']) !!}
</div>


<!-- Pagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pagamento', __('models/ipcontaipEstimadas.fields.pagamento').':') !!}
    {!! Form::text('pagamento', null, ['class' => 'form-control']) !!}
</div>


<!-- Versao Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('versao_mobile', __('models/ipcontaipEstimadas.fields.versao_mobile').':') !!}
    {!! Form::text('versao_mobile', null, ['class' => 'form-control']) !!}
</div>


<!-- Segmento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segmento', __('models/ipcontaipEstimadas.fields.segmento').':') !!}
    {!! Form::text('segmento', null, ['class' => 'form-control']) !!}
</div>


<!-- Fatura Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatura_numero', __('models/ipcontaipEstimadas.fields.fatura_numero').':') !!}
    {!! Form::text('fatura_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Fatura Mes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatura_mes', __('models/ipcontaipEstimadas.fields.fatura_mes').':') !!}
    {!! Form::text('fatura_mes', null, ['class' => 'form-control']) !!}
</div>


<!-- Fatura Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatura_ano', __('models/ipcontaipEstimadas.fields.fatura_ano').':') !!}
    {!! Form::number('fatura_ano', null, ['class' => 'form-control']) !!}
</div>


<!-- Idfillowup Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfillowup', __('models/ipcontaipEstimadas.fields.idfillowup').':') !!}
    {!! Form::text('idfillowup', null, ['class' => 'form-control']) !!}
</div>


<!-- Conta Entregue Fisicamente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conta_entregue_fisicamente', __('models/ipcontaipEstimadas.fields.conta_entregue_fisicamente').':') !!}
    {!! Form::number('conta_entregue_fisicamente', null, ['class' => 'form-control']) !!}
</div>


<!-- Status Conta Fisica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_conta_fisica', __('models/ipcontaipEstimadas.fields.status_conta_fisica').':') !!}
    {!! Form::text('status_conta_fisica', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ipcontaipEstimadas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
