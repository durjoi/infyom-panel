<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/ipcontaip13s.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Reg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_reg', __('models/ipcontaip13s.fields.tipo_reg').':') !!}
    {!! Form::text('tipo_reg', null, ['class' => 'form-control']) !!}
</div>


<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', __('models/ipcontaip13s.fields.cnpj').':') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cliente', __('models/ipcontaip13s.fields.cod_cliente').':') !!}
    {!! Form::number('cod_cliente', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_contrato', __('models/ipcontaip13s.fields.cod_contrato').':') !!}
    {!! Form::number('cod_contrato', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Multiservico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_multiservico', __('models/ipcontaip13s.fields.cod_multiservico').':') !!}
    {!! Form::number('cod_multiservico', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Doc Pag Coletiva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_doc_pag_coletiva', __('models/ipcontaip13s.fields.num_doc_pag_coletiva').':') !!}
    {!! Form::text('num_doc_pag_coletiva', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_fatura', __('models/ipcontaip13s.fields.num_fatura').':') !!}
    {!! Form::text('num_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Medidor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_medidor', __('models/ipcontaip13s.fields.num_medidor').':') !!}
    {!! Form::text('num_medidor', null, ['class' => 'form-control']) !!}
</div>


<!-- Descr Funcao Reduzida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descr_funcao_reduzida', __('models/ipcontaip13s.fields.descr_funcao_reduzida').':') !!}
    {!! Form::text('descr_funcao_reduzida', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Leit Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_leit_anterior', __('models/ipcontaip13s.fields.data_leit_anterior').':') !!}
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
    {!! Form::label('data_leit_atual', __('models/ipcontaip13s.fields.data_leit_atual').':') !!}
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


<!-- Leitura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('leitura', __('models/ipcontaip13s.fields.leitura').':') !!}
    {!! Form::number('leitura', null, ['class' => 'form-control']) !!}
</div>


<!-- Constante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('constante', __('models/ipcontaip13s.fields.constante').':') !!}
    {!! Form::number('constante', null, ['class' => 'form-control']) !!}
</div>


<!-- Sinal Do Ajuste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sinal_do_ajuste', __('models/ipcontaip13s.fields.sinal_do_ajuste').':') !!}
    {!! Form::text('sinal_do_ajuste', null, ['class' => 'form-control']) !!}
</div>


<!-- Ajuste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ajuste', __('models/ipcontaip13s.fields.ajuste').':') !!}
    {!! Form::number('ajuste', null, ['class' => 'form-control']) !!}
</div>


<!-- Csu Dem Lida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csu_dem_lida', __('models/ipcontaip13s.fields.csu_dem_lida').':') !!}
    {!! Form::number('csu_dem_lida', null, ['class' => 'form-control']) !!}
</div>


<!-- Csu Dem Lida Com Ajuste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csu_dem_lida_com_ajuste', __('models/ipcontaip13s.fields.csu_dem_lida_com_ajuste').':') !!}
    {!! Form::number('csu_dem_lida_com_ajuste', null, ['class' => 'form-control']) !!}
</div>


<!-- Descricao Funcao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_funcao', __('models/ipcontaip13s.fields.descricao_funcao').':') !!}
    {!! Form::text('descricao_funcao', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ipcontaip13s.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
