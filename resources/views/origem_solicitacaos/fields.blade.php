<!-- Origemsolicitacao Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origemsolicitacao_codigo', __('models/origemSolicitacaos.fields.origemsolicitacao_codigo').':') !!}
    {!! Form::text('origemsolicitacao_codigo', null, ['class' => 'form-control']) !!}
</div>


<!-- Origemsolicitacao Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origemsolicitacao_descricao', __('models/origemSolicitacaos.fields.origemsolicitacao_descricao').':') !!}
    {!! Form::text('origemsolicitacao_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Origemsolicitacao Descritivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origemsolicitacao_descritivo', __('models/origemSolicitacaos.fields.origemsolicitacao_descritivo').':') !!}
    {!! Form::text('origemsolicitacao_descritivo', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/origemSolicitacaos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/origemSolicitacaos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('origemSolicitacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
