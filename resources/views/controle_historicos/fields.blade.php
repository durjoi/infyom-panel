<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', __('models/controleHistoricos.fields.descricao').':') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Id Solicitacao Reclamacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_solicitacao_reclamacao', __('models/controleHistoricos.fields.id_solicitacao_reclamacao').':') !!}
    {!! Form::select('id_solicitacao_reclamacao', \App\Models\solicitacao_reclamacao::orderBy('protocolo_sistema')->pluck('protocolo_sistema', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/controleHistoricos.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/controleHistoricos.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('controleHistoricos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
