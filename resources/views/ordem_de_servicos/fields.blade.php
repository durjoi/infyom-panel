<!-- Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origem', __('models/ordemDeServicos.fields.origem').':') !!}
    {!! Form::text('origem', null, ['class' => 'form-control']) !!}
</div>


<!-- Número De Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_de_poste', __('models/ordemDeServicos.fields.numero_de_poste').':') !!}
    {!! Form::text('numero_de_poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Número De Luminaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_de_luminaria', __('models/ordemDeServicos.fields.numero_de_luminaria').':') !!}
    {!! Form::text('numero_de_luminaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante', __('models/ordemDeServicos.fields.solicitante').':') !!}
    {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Do Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_do_solicitante', __('models/ordemDeServicos.fields.telefone_do_solicitante').':') !!}
    {!! Form::text('telefone_do_solicitante', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Do Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_do_solicitante', __('models/ordemDeServicos.fields.tipo_do_solicitante').':') !!}
    {!! Form::text('tipo_do_solicitante', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Da Solictacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_da_solictacao', __('models/ordemDeServicos.fields.tipo_da_solictacao').':') !!}
    {!! Form::text('tipo_da_solictacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', __('models/ordemDeServicos.fields.logradouro').':') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
</div>


<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', __('models/ordemDeServicos.fields.bairro').':') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>


<!-- Vis A Vis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vis_a_vis', __('models/ordemDeServicos.fields.vis_a_vis').':') !!}
    {!! Form::text('vis_a_vis', null, ['class' => 'form-control']) !!}
</div>


<!-- Referência Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencia', __('models/ordemDeServicos.fields.referencia').':') !!}
    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Do Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_do_logradouro', __('models/ordemDeServicos.fields.tipo_do_logradouro').':') !!}
    {!! Form::text('tipo_do_logradouro', null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Do Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_do_logradouro', __('models/ordemDeServicos.fields.nome_do_logradouro').':') !!}
    {!! Form::text('nome_do_logradouro', null, ['class' => 'form-control']) !!}
</div>


<!-- Dados Complementares Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dados_complementares', __('models/ordemDeServicos.fields.dados_complementares').':') !!}
    {!! Form::text('dados_complementares', null, ['class' => 'form-control']) !!}
</div>


<!-- ServiçoSolicitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servico_solicitado', __('models/ordemDeServicos.fields.servico_solicitado').':') !!}
    {!! Form::text('servico_solicitado', null, ['class' => 'form-control']) !!}
</div>


<!-- Protocolo Oficio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('protocolo_oficio', __('models/ordemDeServicos.fields.protocolo_oficio').':') !!}
    {!! Form::text('protocolo_oficio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/ordemDeServicos.fields.status').':') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12" style="border-radius: 1px;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-list"></i> Itens
            {{--                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Adicionar item</button>--}}
            <div class="clearfix"></div>
        </div>
        <div class="panel-body container-items">
            @if(isset($ordemDeServico) && count($ordemDeServico->items) > 0)
                @foreach($ordemDeServico->items as $index => $item)
                    @include('items.fields-os')
                @endforeach
            @else
                @php($index = 0)
                @include('items.fields-os')
            @endif
            <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Adicionar item</button>
        </div>

    </div>

</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ordemDeServicos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>


<script type="text/javascript">
    var i = $(".item").length;
    var item = $(".item:first").clone();

    $(document).on( "click", '.add-item', function () {
        newitem = $(item).clone();

        $(newitem).find('#produto').attr('name', `Item[${i}][produto]`);
        $(newitem).find('#marca').attr('name', `Item[${i}][marca]`);
        $(newitem).find('#unidade').attr('name', `Item[${i}][unidade]`);
        $(newitem).find('#quantidade').attr('name', `Item[${i}][quantidade]`);
        $(newitem).find('#preco_total').attr('name', `Item[${i}][preco_total]`);

        $(newitem).find('#produto').val('');
        $(newitem).find('#marca').val('');
        $(newitem).find('#unidade').val('');
        $(newitem).find('#quantidade').val('');
        $(newitem).find('#preco_total').val('');

        i++;
        $(newitem).find('.panel-title-item').html(`Item: ${i}`);

        $('.item:last').after(newitem);
        $(document).scrollTop($('body')[0].offsetHeight);

    });
    $(document).on( "click", '.remove-item', function () {
        if($('.item').length > 1){
            $(this).parents('.item').remove();

        }
    });
</script>
