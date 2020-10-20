<!-- Produto Field -->
<div class="form-group">
    {!! Form::label('produto', __('produto').':') !!}
    <p>{{ $item->produto }}</p>
</div>


<!-- Marca Field -->
<div class="form-group">
    {!! Form::label('marca', __('marca').':') !!}
    <p>{{ $item->marca }}</p>
</div>


<!-- Unidade Field -->
<div class="form-group">
    {!! Form::label('unidade', __('unidade').':') !!}
    <p>{{ $item->unidade }}</p>
</div>


<!-- Quantidade Field -->
<div class="form-group">
    {!! Form::label('quantidade', __('quantidade').':') !!}
    <p>{{ $item->quantidade }}</p>
</div>


<!-- Preco Total Field -->
<div class="form-group">
    {!! Form::label('preco_total', __('preco_total').':') !!}
    <p>{{ $item->preco_total }}</p>
</div>


<!-- Fk Ordem De ServiçoField -->
<div class="form-group">
    {!! Form::label('ordem_de_servico_id', __('ordem_de_servico_id').':') !!}
    <p>{{ $item->ordem_de_servico_id }}</p>
</div>


