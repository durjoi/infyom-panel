<div id="passo-1" style="display: block">
    <div class="form-group col-sm-12">
        <h3>Passo 1 de 3</h3>
    </div>
    <!-- Aplicacao Obra Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('aplicacao_obra', __('models/pedidoMaterials.fields.aplicacao_obra').':') !!}
        {!! Form::text('aplicacao_obra', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Engenheiro Eletricista Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('engenheiro_eletricista', __('models/pedidoMaterials.fields.engenheiro_eletricista').':') !!}
        {!! Form::text('engenheiro_eletricista', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Data Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('data', __('models/pedidoMaterials.fields.data').':') !!}
        {!! Form::text('data', null, ['class' => 'form-control','id'=>'data']) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#data').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
@endpush


<!-- Numero Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('numero', __('models/pedidoMaterials.fields.numero').':') !!}
        {!! Form::number('numero', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Centro De Custo Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('centro_de_custo', __('models/pedidoMaterials.fields.centro_de_custo').':') !!}
        {!! Form::text('centro_de_custo', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Almoxarifado Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('almoxarifado', __('models/pedidoMaterials.fields.almoxarifado').':') !!}
        {!! Form::text('almoxarifado', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Telefone Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('telefone', __('models/pedidoMaterials.fields.telefone').':') !!}
        {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Celular Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('celular', __('models/pedidoMaterials.fields.celular').':') !!}
        {!! Form::text('celular', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email', __('models/pedidoMaterials.fields.email').':') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Cnpj Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cnpj', __('models/pedidoMaterials.fields.cnpj').':') !!}
        {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Inscricao Estadual Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('inscricao_estadual', __('models/pedidoMaterials.fields.inscricao_estadual').':') !!}
        {!! Form::text('inscricao_estadual', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Solicitante Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('solicitante', __('models/pedidoMaterials.fields.solicitante').':') !!}
        {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Icms Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('icms', __('models/pedidoMaterials.fields.icms').':') !!}
        {!! Form::text('icms', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Juros Mes Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('juros_mes', __('models/pedidoMaterials.fields.juros_mes').':') !!}
        {!! Form::number('juros_mes', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">

        <div style="float: right">
            <a class="btn btn-primary" onclick="$('#passo-1').css('display', 'none'); $('#passo-2').css('display', 'block')">Próximo <i class="fa fa-arrow-right"></i></a>
        </div>

    </div>
</div>
<div id="passo-2" style="display: none">
    <div class="form-group col-sm-12">
        <h3>Passo 2 de 3</h3>
    </div>

    <div class="form-group col-sm-12" style="border-radius: 1px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-list"></i> Itens
                {{--                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Adicionar item</button>--}}
                <div class="clearfix"></div>
            </div>
            <div class="panel-body container-items">
                @if(isset($pedidoMaterial) && count($pedidoMaterial->pedidoMaterialItems) > 0)
                    @foreach($pedidoMaterial->pedidoMaterialItems as $index => $pedidoMaterialItem)
                        @include('pedido_material_items.fields-os')
                    @endforeach
                @else
                    @php($index = 0)
                    @include('pedido_material_items.fields-os')
                @endif
                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Adicionar item</button>
            </div>

        </div>
    </div>
    <div class="form-group col-sm-12">
        <div style="display: flex; justify-content: space-between">
            <a class="btn btn-default" onclick="$('#passo-2').css('display', 'none'); $('#passo-1').css('display', 'block')"><i class="fa fa-arrow-left"></i> Voltar</a>
            <a class="btn btn-primary" onclick="$('#passo-2').css('display', 'none'); $('#passo-3').css('display', 'block')">Próximo <i class="fa fa-arrow-right"></i></a>
        </div>

    </div>
</div>

<div id="passo-3" style="display: none">
    <div class="form-group col-sm-12">
        <h3>Passo 3 de 3</h3>
    </div>


    <!-- Endereco Entrega Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('endereco_entrega', __('models/pedidoMaterials.fields.endereco_entrega').':') !!}
        {!! Form::text('endereco_entrega', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Bairro Entrega Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('bairro_entrega', __('models/pedidoMaterials.fields.bairro_entrega').':') !!}
        {!! Form::text('bairro_entrega', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Cep Entrega Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cep_entrega', __('models/pedidoMaterials.fields.cep_entrega').':') !!}
        {!! Form::text('cep_entrega', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Cnpj Entrega Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cnpj_entrega', __('models/pedidoMaterials.fields.cnpj_entrega').':') !!}
        {!! Form::text('cnpj_entrega', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Cidade Entrega Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cidade_entrega', __('models/pedidoMaterials.fields.cidade_entrega').':') !!}
        {!! Form::text('cidade_entrega', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Telefone Contato Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('telefone_contato', __('models/pedidoMaterials.fields.telefone_contato').':') !!}
        {!! Form::text('telefone_contato', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group col-sm-12">
        <div style="display: flex; justify-content: space-between">
            <a class="btn btn-default" onclick="$('#passo-3').css('display', 'none'); $('#passo-2').css('display', 'block')"><i class="fa fa-arrow-left"></i> Voltar</a>
            {!! Form::submit(__('crud.save'), ['class' => 'btn btn-success']) !!}
        </div>

    </div>

</div>


<script type="text/javascript">
    var i = $(".item").length;
    var item = $(".item:first").clone();

    $(document).on( "click", '.add-item', function () {
        newitem = $(item).clone();

        $(newitem).find('#descricao').attr('name', `PedidoMaterialItem[${i}][descricao]`);
        $(newitem).find('#unidade').attr('name', `PedidoMaterialItem[${i}][unidade]`);
        $(newitem).find('#saldo_estoque').attr('name', `PedidoMaterialItem[${i}][saldo_estoque]`);
        $(newitem).find('#quantidade_solicitada').attr('name', `PedidoMaterialItem[${i}][quantidade_solicitada]`);
        $(newitem).find('#preco_anterior').attr('name', `PedidoMaterialItem[${i}][preco_anterior]`);
        $(newitem).find('#total').attr('name', `PedidoMaterialItem[${i}][total]`);
        $(newitem).find('#observacoes').attr('name', `PedidoMaterialItem[${i}][observacoes]`);

        $(newitem).find('#descricao').val('');
        $(newitem).find('#unidade').val('');
        $(newitem).find('#saldo_estoque').val('');
        $(newitem).find('#quantidade_solicitada').val('');
        $(newitem).find('#preco_anterior').val('');
        $(newitem).find('#total').val('');
        $(newitem).find('#observacoes').val('');

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
