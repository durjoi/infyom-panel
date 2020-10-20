<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/ipcontaipSecretarias.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Secretaria Sigla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('secretaria_sigla', __('models/ipcontaipSecretarias.fields.secretaria_sigla').':') !!}
    {!! Form::text('secretaria_sigla', null, ['class' => 'form-control']) !!}
</div>


<!-- Secretaria Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('secretaria_nome', __('models/ipcontaipSecretarias.fields.secretaria_nome').':') !!}
    {!! Form::text('secretaria_nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Secretaria Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('secretaria_tipo', __('models/ipcontaipSecretarias.fields.secretaria_tipo').':') !!}
    {!! Form::text('secretaria_tipo', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/ipcontaipSecretarias.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/ipcontaipSecretarias.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ipcontaipSecretarias.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
