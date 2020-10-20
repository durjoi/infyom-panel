<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/funcips.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', __('models/funcips.fields.ano').':') !!}
    {!! Form::number('ano', null, ['class' => 'form-control']) !!}
</div>


<!-- Idmeses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmeses', __('models/funcips.fields.idmeses').':') !!}
    {!! Form::select('idmeses', \App\Models\meses::orderBy('id')->pluck('mes', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Modulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modulo', __('models/funcips.fields.modulo').':') !!}
    {!! Form::text('modulo', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Estimado Pagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_estimado_pagamento', __('models/funcips.fields.valor_estimado_pagamento').':') !!}
    {!! Form::number('valor_estimado_pagamento', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/funcips.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/funcips.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('funcips.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
