

<div class="item panel panel-default"><!-- widgetBody -->
    <div class="panel-heading">
        <span class="panel-title-item">Item: {{ ($index ?? '0') + 1 }}</span>
        <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">

        <!-- Material Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('material', __('models/itensOs.fields.material').':') !!}
            {!! Form::text('material', (isset($itemOs) ? $itemOs->material : null), ['class' => 'form-control', 'name' => "ItemOs[${index}][material]"]) !!}
        </div>


        <!-- Qtd Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('qtd', __('models/itensOs.fields.qtd').':') !!}
            {!! Form::number('qtd', (isset($itemOs) ? $itemOs->qtd : null), ['class' => 'form-control', 'name' => "ItemOs[${index}][qtd]"]) !!}
        </div>


        <!-- Defeito Encontrado Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('defeito_encontrado', __('models/itensOs.fields.defeito_encontrado').':') !!}
            {!! Form::text('defeito_encontrado', (isset($itemOs) ? $itemOs->defeito_encontrado : null), ['class' => 'form-control', 'name' => "ItemOs[${index}][defeito_encontrado]"]) !!}
        </div>


        <!-- Causa Provavel Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('causa_provavel', __('models/itensOs.fields.causa_provavel').':') !!}
            {!! Form::text('causa_provavel', (isset($itemOs) ? $itemOs->causa_provavel : null), ['class' => 'form-control', 'name' => "ItemOs[${index}][causa_provavel]"]) !!}
        </div>


    </div>
</div>
