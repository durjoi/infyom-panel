

<div class="item panel panel-default"><!-- widgetBody -->
    <div class="panel-heading">
        <span class="panel-title-item">Item: {{ ($index ?? '0') + 1 }}</span>
        <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">



        <!-- Numero Do Poste Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('numero_do_poste', __('models/pontos.fields.numero_do_poste').':') !!}
            {!! Form::number('numero_do_poste', (isset($ponto) ? $ponto->numero_do_poste : null), ['class' => 'form-control', 'name' => "Ponto[${index}][numero_do_poste]"]) !!}
        </div>


        <!-- Cadastro Sativa Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('cadastro_sativa', __('models/pontos.fields.cadastro_sativa').':') !!}
            {!! Form::text('cadastro_sativa', (isset($ponto) ? $ponto->cadastro_sativa : null), ['class' => 'form-control', 'name' => "Ponto[${index}][cadastro_sativa]"]) !!}
        </div>


        <!-- Trafo Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('trafo', __('models/pontos.fields.trafo').':') !!}
            {!! Form::text('trafo', (isset($ponto) ? $ponto->trafo : null), ['class' => 'form-control', 'name' => "Ponto[${index}][trafo]"]) !!}
        </div>


        <!-- Endereco Descricao Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('endereco_descricao', __('models/pontos.fields.endereco_descricao').':') !!}
            {!! Form::text('endereco_descricao', (isset($ponto) ? $ponto->endereco_descricao : null), ['class' => 'form-control', 'name' => "Ponto[${index}][endereco_descricao]"]) !!}
        </div>


    </div>
</div>
