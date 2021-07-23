<div class="item panel panel-default"><!-- widgetBody -->
    <div class="panel-heading">
        <span class="panel-title-item">Item: {{ ($index ?? '0') + 1 }}</span>
        <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">

        <!-- Produto Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('produto', __('models/items.fields.produto').':') !!}
            {!! Form::text('produto', (isset($item) ? $item->produto : null), ['class' => 'form-control', 'name' => "Item[${index}][produto]"]) !!}
        </div>


        <!-- Marca Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('marca', __('models/items.fields.marca').':') !!}
            {!! Form::text('marca', (isset($item) ? $item->marca : null), ['class' => 'form-control', 'name' => "Item[${index}][marca]"]) !!}
        </div>


        <!-- Unidade Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('unidade', __('models/items.fields.unidade').':') !!}
            {!! Form::text('unidade', (isset($item) ? $item->unidade : null), ['class' => 'form-control', 'name' => "Item[${index}][unidade]"]) !!}
        </div>

        <!-- Quantidade Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('quantidade', __('models/items.fields.quantidade').':') !!}
            {!! Form::text('quantidade', (isset($item) ? $item->quantidade : null), ['class' => 'form-control', 'name' => "Item[${index}][quantidade]"]) !!}
        </div>


        <!-- Preco Total Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('preco_total', __('models/items.fields.preco_total').':') !!}
            {!! Form::text('preco_total', (isset($item) ? $item->preco_total : null), ['class' => 'form-control', 'name' => "Item[${index}][preco_total]"]) !!}
        </div>




    </div>
</div>
