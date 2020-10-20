<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/ipcontaip12s.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Reg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_reg', __('models/ipcontaip12s.fields.tipo_reg').':') !!}
    {!! Form::text('tipo_reg', null, ['class' => 'form-control']) !!}
</div>


<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', __('models/ipcontaip12s.fields.cnpj').':') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cliente', __('models/ipcontaip12s.fields.cod_cliente').':') !!}
    {!! Form::number('cod_cliente', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_contrato', __('models/ipcontaip12s.fields.cod_contrato').':') !!}
    {!! Form::number('cod_contrato', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Multiservico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_multiservico', __('models/ipcontaip12s.fields.cod_multiservico').':') !!}
    {!! Form::number('cod_multiservico', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Cod Pag Cta Coletivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_cod_pag_cta_coletivo', __('models/ipcontaip12s.fields.num_cod_pag_cta_coletivo').':') !!}
    {!! Form::text('num_cod_pag_cta_coletivo', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_fatura', __('models/ipcontaip12s.fields.num_fatura').':') !!}
    {!! Form::text('num_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Codigo Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_instalacao', __('models/ipcontaip12s.fields.codigo_instalacao').':') !!}
    {!! Form::number('codigo_instalacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Classe Subclasse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_classe_subclasse', __('models/ipcontaip12s.fields.cod_classe_subclasse').':') !!}
    {!! Form::text('cod_classe_subclasse', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Tarifa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_tarifa', __('models/ipcontaip12s.fields.cod_tarifa').':') !!}
    {!! Form::text('cod_tarifa', null, ['class' => 'form-control']) !!}
</div>


<!-- Tensao Fornecimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tensao_fornecimento', __('models/ipcontaip12s.fields.tensao_fornecimento').':') !!}
    {!! Form::text('tensao_fornecimento', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_fatura', __('models/ipcontaip12s.fields.data_fatura').':') !!}
    {!! Form::date('data_fatura', null, ['class' => 'form-control','id'=>'data_fatura']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_fatura').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Data Vencimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_vencimento', __('models/ipcontaip12s.fields.data_vencimento').':') !!}
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


<!-- Data Leit Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_leit_anterior', __('models/ipcontaip12s.fields.data_leit_anterior').':') !!}
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
    {!! Form::label('data_leit_atual', __('models/ipcontaip12s.fields.data_leit_atual').':') !!}
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


<!-- Tipo Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_fatura', __('models/ipcontaip12s.fields.tipo_fatura').':') !!}
    {!! Form::text('tipo_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Sinal Do Saldo Da Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sinal_do_saldo_da_fatura', __('models/ipcontaip12s.fields.sinal_do_saldo_da_fatura').':') !!}
    {!! Form::text('sinal_do_saldo_da_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Saldo Da Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('saldo_da_fatura', __('models/ipcontaip12s.fields.saldo_da_fatura').':') !!}
    {!! Form::number('saldo_da_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Do Icms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_do_icms', __('models/ipcontaip12s.fields.valor_do_icms').':') !!}
    {!! Form::number('valor_do_icms', null, ['class' => 'form-control']) !!}
</div>


<!-- Base Calculo Icms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('base_calculo_icms', __('models/ipcontaip12s.fields.base_calculo_icms').':') !!}
    {!! Form::number('base_calculo_icms', null, ['class' => 'form-control']) !!}
</div>


<!-- Aliquota Icms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aliquota_icms', __('models/ipcontaip12s.fields.aliquota_icms').':') !!}
    {!! Form::number('aliquota_icms', null, ['class' => 'form-control']) !!}
</div>


<!-- Perda Transformacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perda_transformacao', __('models/ipcontaip12s.fields.perda_transformacao').':') !!}
    {!! Form::number('perda_transformacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Fator De Potencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fator_de_potencia', __('models/ipcontaip12s.fields.fator_de_potencia').':') !!}
    {!! Form::number('fator_de_potencia', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Da Demanda Contratada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_da_demanda_contratada', __('models/ipcontaip12s.fields.valor_da_demanda_contratada').':') !!}
    {!! Form::number('valor_da_demanda_contratada', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Da Demanda Contratada Na Ponta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_da_demanda_contratada_na_ponta', __('models/ipcontaip12s.fields.valor_da_demanda_contratada_na_ponta').':') !!}
    {!! Form::number('valor_da_demanda_contratada_na_ponta', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Da Demanda Contratada Fora De Ponta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_da_demanda_contratada_fora_de_ponta', __('models/ipcontaip12s.fields.valor_da_demanda_contratada_fora_de_ponta').':') !!}
    {!! Form::number('valor_da_demanda_contratada_fora_de_ponta', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Do Pis Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_do_pis_fatura', __('models/ipcontaip12s.fields.valor_do_pis_fatura').':') !!}
    {!! Form::number('valor_do_pis_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Do Cofins Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_do_cofins_fatura', __('models/ipcontaip12s.fields.valor_do_cofins_fatura').':') !!}
    {!! Form::number('valor_do_cofins_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ipcontaip12s.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
