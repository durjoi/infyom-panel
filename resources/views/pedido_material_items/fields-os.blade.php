

<div class="item panel panel-default"><!-- widgetBody -->
    <div class="panel-heading">
        <span class="panel-title-item">Item: {{ ($index ?? '0') + 1 }}</span>
        <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">


        <!-- Descricao Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('descricao', __('models/pedidoMaterialItems.fields.descricao').':') !!}
            {!! Form::text('descricao', (isset($pedidoMaterialItem) ? $pedidoMaterialItem->descricao : null), ['class' => 'form-control', 'name' => "PedidoMaterialItem[${index}][descricao]"]) !!}
        </div>


        <!-- Unidade Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('unidade', __('models/pedidoMaterialItems.fields.unidade').':') !!}
            {!! Form::number('unidade', (isset($pedidoMaterialItem) ? $pedidoMaterialItem->unidade : null), ['class' => 'form-control', 'name' => "PedidoMaterialItem[${index}][unidade]"]) !!}
        </div>


        <!-- Saldo Estoque Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('saldo_estoque', __('models/pedidoMaterialItems.fields.saldo_estoque').':') !!}
            {!! Form::number('saldo_estoque', (isset($pedidoMaterialItem) ? $pedidoMaterialItem->saldo_estoque : null), ['class' => 'form-control', 'name' => "PedidoMaterialItem[${index}][saldo_estoque]"]) !!}
        </div>


        <!-- Quantidade Solicitada Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('quantidade_solicitada', __('models/pedidoMaterialItems.fields.quantidade_solicitada').':') !!}
            {!! Form::number('quantidade_solicitada', (isset($pedidoMaterialItem) ? $pedidoMaterialItem->quantidade_solicitada : null), ['class' => 'form-control', 'name' => "PedidoMaterialItem[${index}][quantidade_solicitada]"]) !!}
        </div>


        <!-- Preco Anterior Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('preco_anterior', __('models/pedidoMaterialItems.fields.preco_anterior').':') !!}
            {!! Form::number('preco_anterior', (isset($pedidoMaterialItem) ? $pedidoMaterialItem->preco_anterior : null), ['class' => 'form-control', 'name' => "PedidoMaterialItem[${index}][preco_anterior]"]) !!}
        </div>


        <!-- Total Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('total', __('models/pedidoMaterialItems.fields.total').':') !!}
            {!! Form::number('total', (isset($pedidoMaterialItem) ? $pedidoMaterialItem->total : null), ['class' => 'form-control', 'name' => "PedidoMaterialItem[${index}][total]"]) !!}
        </div>


        <!-- Observacoes Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('observacoes', __('models/pedidoMaterialItems.fields.observacoes').':') !!}
            {!! Form::text('observacoes', (isset($pedidoMaterialItem) ? $pedidoMaterialItem->observacoes : null), ['class' => 'form-control', 'name' => "PedidoMaterialItem[${index}][observacoes]"]) !!}
        </div>

    </div>
</div>
