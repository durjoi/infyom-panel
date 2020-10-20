<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', __('models/tarifas.fields.tipo').':') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>


<!-- Idmeses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmeses', __('models/tarifas.fields.idmeses').':') !!}
    {!! Form::select('idmeses', \App\Models\meses::orderBy('id')->pluck('mes', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Ano Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano_referencia', __('models/tarifas.fields.ano_referencia').':') !!}
    {!! Form::number('ano_referencia', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', __('models/tarifas.fields.valor').':') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>


<!-- Aliquota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aliquota', __('models/tarifas.fields.aliquota').':') !!}
    {!! Form::number('aliquota', null, ['class' => 'form-control']) !!}
</div>


<!-- Resolucao Annel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resolucao_annel', __('models/tarifas.fields.resolucao_annel').':') !!}
    {!! Form::text('resolucao_annel', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/tarifas.fields.incluidoem').':') !!}
    {!! Form::date('incluidoem', null, ['class' => 'form-control','id'=>'incluidoem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#incluidoem').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuario', __('models/tarifas.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tarifas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
