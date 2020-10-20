<!-- Tiposolicitacao Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiposolicitacao_descricao', __('models/tipoSolicitacaos.fields.tiposolicitacao_descricao').':') !!}
    {!! Form::text('tiposolicitacao_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Tiposolicitacao Aplicacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiposolicitacao_aplicacao', __('models/tipoSolicitacaos.fields.tiposolicitacao_aplicacao').':') !!}
    {!! Form::text('tiposolicitacao_aplicacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/tipoSolicitacaos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/tipoSolicitacaos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tipoSolicitacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
