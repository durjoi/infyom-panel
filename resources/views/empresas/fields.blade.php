<!-- Empresa Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa_nome', __('models/empresas.fields.empresa_nome').':') !!}
    {!! Form::text('empresa_nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Empresa Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa_descricao', __('models/empresas.fields.empresa_descricao').':') !!}
    {!! Form::text('empresa_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/empresas.fields.incluidodoem').':') !!}
    {!! Form::date('incluidodoem', null, ['class' => 'form-control','id'=>'incluidodoem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#incluidodoem').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/empresas.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empresas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
