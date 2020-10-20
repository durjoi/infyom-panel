<!-- Aplicacao Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aplicacao_descricao', __('models/aplicacaos.fields.aplicacao_descricao').':') !!}
    {!! Form::text('aplicacao_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Registradoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registradoem', __('models/aplicacaos.fields.registradoem').':') !!}
    {!! Form::date('registradoem', null, ['class' => 'form-control','id'=>'registradoem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#registradoem').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endpush


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/aplicacaos.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('aplicacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
