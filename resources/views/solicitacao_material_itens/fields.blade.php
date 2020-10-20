<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/solicitacaoMaterialItens.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idcontratoitens Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcontratoitens', __('models/solicitacaoMaterialItens.fields.idcontratoitens').':') !!}
    {!! Form::select('idcontratoitens', \App\Models\Contrato_itens::orderBy('contrato_itens_descricao')->pluck('contrato_itens_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Mo Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mo_quantidade', __('models/solicitacaoMaterialItens.fields.mo_quantidade').':') !!}
    {!! Form::number('mo_quantidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Mo Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mo_origem', __('models/solicitacaoMaterialItens.fields.mo_origem').':') !!}
    {!! Form::text('mo_origem', null, ['class' => 'form-control']) !!}
</div>


<!-- Mt Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mt_quantidade', __('models/solicitacaoMaterialItens.fields.mt_quantidade').':') !!}
    {!! Form::number('mt_quantidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Mt Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mt_origem', __('models/solicitacaoMaterialItens.fields.mt_origem').':') !!}
    {!! Form::text('mt_origem', null, ['class' => 'form-control']) !!}
</div>


<!-- Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuario', __('models/solicitacaoMaterialItens.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Item Com Vandalismo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_com_vandalismo', __('models/solicitacaoMaterialItens.fields.item_com_vandalismo').':') !!}
    {!! Form::number('item_com_vandalismo', null, ['class' => 'form-control']) !!}
</div>


<!-- Sucata Nao Retornada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sucata_nao_retornada', __('models/solicitacaoMaterialItens.fields.sucata_nao_retornada').':') !!}
    {!! Form::number('sucata_nao_retornada', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('solicitacaoMaterialItens.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
