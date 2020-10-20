<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/ipcontaip14Dadosfaturas.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Reg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_reg', __('models/ipcontaip14Dadosfaturas.fields.tipo_reg').':') !!}
    {!! Form::text('tipo_reg', null, ['class' => 'form-control']) !!}
</div>


<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', __('models/ipcontaip14Dadosfaturas.fields.cnpj').':') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cliente', __('models/ipcontaip14Dadosfaturas.fields.cod_cliente').':') !!}
    {!! Form::number('cod_cliente', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_contrato', __('models/ipcontaip14Dadosfaturas.fields.cod_contrato').':') !!}
    {!! Form::number('cod_contrato', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Medidor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_medidor', __('models/ipcontaip14Dadosfaturas.fields.num_medidor').':') !!}
    {!! Form::text('num_medidor', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Multiservico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_multiservico', __('models/ipcontaip14Dadosfaturas.fields.cod_multiservico').':') !!}
    {!! Form::number('cod_multiservico', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Doc Pag Coletiva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_doc_pag_coletiva', __('models/ipcontaip14Dadosfaturas.fields.num_doc_pag_coletiva').':') !!}
    {!! Form::text('num_doc_pag_coletiva', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_fatura', __('models/ipcontaip14Dadosfaturas.fields.num_fatura').':') !!}
    {!! Form::text('num_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Conceito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_conceito', __('models/ipcontaip14Dadosfaturas.fields.cod_conceito').':') !!}
    {!! Form::text('cod_conceito', null, ['class' => 'form-control']) !!}
</div>


<!-- Qtd Conceito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtd_conceito', __('models/ipcontaip14Dadosfaturas.fields.qtd_conceito').':') !!}
    {!! Form::number('qtd_conceito', null, ['class' => 'form-control']) !!}
</div>


<!-- Preco Conceito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco_conceito', __('models/ipcontaip14Dadosfaturas.fields.preco_conceito').':') !!}
    {!! Form::text('preco_conceito', null, ['class' => 'form-control']) !!}
</div>


<!-- Sinal Do Valor Conceitos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sinal_do_valor_conceitos', __('models/ipcontaip14Dadosfaturas.fields.sinal_do_valor_conceitos').':') !!}
    {!! Form::text('sinal_do_valor_conceitos', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Final Com Imposto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_final_com_imposto', __('models/ipcontaip14Dadosfaturas.fields.valor_final_com_imposto').':') !!}
    {!! Form::number('valor_final_com_imposto', null, ['class' => 'form-control']) !!}
</div>


<!-- Descricao Conceito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_conceito', __('models/ipcontaip14Dadosfaturas.fields.descricao_conceito').':') !!}
    {!! Form::text('descricao_conceito', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipano', __('models/ipcontaip14Dadosfaturas.fields.contaipano').':') !!}
    {!! Form::number('contaipano', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipmes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipmes', __('models/ipcontaip14Dadosfaturas.fields.contaipmes').':') !!}
    {!! Form::text('contaipmes', null, ['class' => 'form-control']) !!}
</div>


<!-- Segmento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segmento', __('models/ipcontaip14Dadosfaturas.fields.segmento').':') !!}
    {!! Form::text('segmento', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ipcontaip14Dadosfaturas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
