<!-- Operacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operacao', __('models/operacaos.fields.operacao').':') !!}
    {!! Form::text('operacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Utilizacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('utilizacao', __('models/operacaos.fields.utilizacao').':') !!}
    {!! Form::text('utilizacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/operacaos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/operacaos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('operacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
