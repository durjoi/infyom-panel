<!-- Abreviado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abreviado', __('models/unidades.fields.abreviado').':') !!}
    {!! Form::text('abreviado', null, ['class' => 'form-control']) !!}
</div>


<!-- Unidade Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade_descricao', __('models/unidades.fields.unidade_descricao').':') !!}
    {!! Form::text('unidade_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/unidades.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/unidades.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('unidades.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
