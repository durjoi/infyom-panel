<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', __('models/pedidoMaterialItems.fields.descricao').':') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Unidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidade', __('models/pedidoMaterialItems.fields.unidade').':') !!}
    {!! Form::number('unidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Saldo Estoque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('saldo_estoque', __('models/pedidoMaterialItems.fields.saldo_estoque').':') !!}
    {!! Form::number('saldo_estoque', null, ['class' => 'form-control']) !!}
</div>


<!-- Quantidade Solicitada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_solicitada', __('models/pedidoMaterialItems.fields.quantidade_solicitada').':') !!}
    {!! Form::number('quantidade_solicitada', null, ['class' => 'form-control']) !!}
</div>


<!-- Preco Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco_anterior', __('models/pedidoMaterialItems.fields.preco_anterior').':') !!}
    {!! Form::number('preco_anterior', null, ['class' => 'form-control']) !!}
</div>


<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', __('models/pedidoMaterialItems.fields.total').':') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacoes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacoes', __('models/pedidoMaterialItems.fields.observacoes').':') !!}
    {!! Form::text('observacoes', null, ['class' => 'form-control']) !!}
</div>


<!-- Pedido Material Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_material_id', __('models/pedidoMaterialItems.fields.pedido_material_id').':') !!}
    {!! Form::number('pedido_material_id', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidoMaterialItems.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
