<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/respostasUsuarios.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idrespostas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idrespostas', __('models/respostasUsuarios.fields.idrespostas').':') !!}
    {!! Form::select('idrespostas', \App\Models\respostas::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idusuarioreceber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuarioreceber', __('models/respostasUsuarios.fields.idusuarioreceber').':') !!}
    {!! Form::select('idusuarioreceber', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Receber Mensagem Instantanea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receber_mensagem_instantanea', __('models/respostasUsuarios.fields.receber_mensagem_instantanea').':') !!}
    {!! Form::number('receber_mensagem_instantanea', null, ['class' => 'form-control']) !!}
</div>


<!-- Receber Mensagem Diaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receber_mensagem_diaria', __('models/respostasUsuarios.fields.receber_mensagem_diaria').':') !!}
    {!! Form::number('receber_mensagem_diaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/respostasUsuarios.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/respostasUsuarios.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('respostasUsuarios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
