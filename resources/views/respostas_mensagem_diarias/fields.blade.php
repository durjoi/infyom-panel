<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/respostasMensagemDiarias.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idusuarioreceber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuarioreceber', __('models/respostasMensagemDiarias.fields.idusuarioreceber').':') !!}
    {!! Form::select('idusuarioreceber', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Enviadoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviadoem', __('models/respostasMensagemDiarias.fields.enviadoem').':') !!}
    {!! Form::date('enviadoem', null, ['class' => 'form-control','id'=>'enviadoem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#enviadoem').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('respostasMensagemDiarias.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
