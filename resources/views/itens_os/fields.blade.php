<!-- Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('material', __('models/itensOs.fields.material').':') !!}
    {!! Form::text('material', null, ['class' => 'form-control']) !!}
</div>


<!-- Qtd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtd', __('models/itensOs.fields.qtd').':') !!}
    {!! Form::number('qtd', null, ['class' => 'form-control']) !!}
</div>


<!-- Defeito Encontrado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('defeito_encontrado', __('models/itensOs.fields.defeito_encontrado').':') !!}
    {!! Form::text('defeito_encontrado', null, ['class' => 'form-control']) !!}
</div>


<!-- Causa Provavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('causa_provavel', __('models/itensOs.fields.causa_provavel').':') !!}
    {!! Form::text('causa_provavel', null, ['class' => 'form-control']) !!}
</div>


<!-- Ordem De Servico Manutencao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ordem_de_servico_manutencao_id', __('models/itensOs.fields.ordem_de_servico_manutencao_id').':') !!}
    {!! Form::number('ordem_de_servico_manutencao_id', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('itensOs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
