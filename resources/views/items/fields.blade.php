<!-- Produto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produto', __('models/items.fields.produto').':') !!}
    {!! Form::text('produto', null, ['class' => 'form-control']) !!}
</div>


<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', __('models/items.fields.marca').':') !!}
    {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>


<!-- Unidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade', __('models/items.fields.unidade').':') !!}
    {!! Form::text('unidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade', __('models/items.fields.quantidade').':') !!}
    {!! Form::text('quantidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Preco Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco_total', __('models/items.fields.preco_total').':') !!}
    {!! Form::text('preco_total', null, ['class' => 'form-control']) !!}
</div>


<!-- Fk Ordem De ServiçoField -->
<div class="form-group col-sm-6">
    {!! Form::label('ordem_de_servico_id', __('models/items.fields.ordem_de_servico_id').':') !!}
    {!! Form::select('ordem_de_servico_id', \App\Models\ordemDeServico::orderBy('id')->pluck('id', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('items.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
