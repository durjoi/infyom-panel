<div id="passo-1" style="display: block">
    <div class="form-group col-sm-12">
        <h3>Passo 1 de 5</h3>
    </div>

    <!-- Protocolo Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('protocolo', __('models/ordemDeServicoManutencaos.fields.protocolo').':') !!}
        {!! Form::text('protocolo', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Data Hora Registro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('data_hora_registro', __('models/ordemDeServicoManutencaos.fields.data_hora_registro').':') !!}
        {!! Form::text('data_hora_registro', null, ['class' => 'form-control']) !!}
    </div>
    @push('scripts')
        <script type="text/javascript">
            $('#data_hora_registro').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
@endpush

<!-- Registrado Por Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('registrado_por', __('models/ordemDeServicoManutencaos.fields.registrado_por').':') !!}
        {!! Form::text('registrado_por', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Protocolo Oficio Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('protocolo_oficio', __('models/ordemDeServicoManutencaos.fields.protocolo_oficio').':') !!}
        {!! Form::text('protocolo_oficio', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Tipo Do Solicitante Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tipo_do_solicitante', __('models/ordemDeServicoManutencaos.fields.tipo_do_solicitante').':') !!}
        {!! Form::text('tipo_do_solicitante', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Solicitante Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('solicitante', __('models/ordemDeServicoManutencaos.fields.solicitante').':') !!}
        {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Telefone Do Solicitante Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('telefone_do_solicitante', __('models/ordemDeServicoManutencaos.fields.telefone_do_solicitante').':') !!}
        {!! Form::text('telefone_do_solicitante', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Numero De Poste Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('numero_de_poste', __('models/ordemDeServicoManutencaos.fields.numero_de_poste').':') !!}
        {!! Form::text('numero_de_poste', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Numero De Luminaria Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('numero_de_luminaria', __('models/ordemDeServicoManutencaos.fields.numero_de_luminaria').':') !!}
        {!! Form::text('numero_de_luminaria', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Coordenada X Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('coordenada_x', __('models/ordemDeServicoManutencaos.fields.coordenada_x').':') !!}
        {!! Form::text('coordenada_x', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Coordenada Y Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('coordenada_y', __('models/ordemDeServicoManutencaos.fields.coordenada_y').':') !!}
        {!! Form::text('coordenada_y', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">

        <div style="float: right">
            <a class="btn btn-primary" onclick="$('#passo-1').css('display', 'none'); $('#passo-2').css('display', 'block')">Próximo <i class="fa fa-arrow-right"></i></a>
        </div>

    </div>
</div>

<div id="passo-2" style="display: none">
    <div class="form-group col-sm-12">
        <h3>Passo 2 de 5</h3>
    </div>
    <!-- Endereco Cadastro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('endereco_cadastro', __('models/ordemDeServicoManutencaos.fields.endereco_cadastro').':') !!}
        {!! Form::text('endereco_cadastro', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Vis A Vis Cadastro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('vis_a_vis_cadastro', __('models/ordemDeServicoManutencaos.fields.vis_a_vis_cadastro').':') !!}
        {!! Form::text('vis_a_vis_cadastro', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Referencia Cadastro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('referencia_cadastro', __('models/ordemDeServicoManutencaos.fields.referencia_cadastro').':') !!}
        {!! Form::text('referencia_cadastro', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Endereco Fornecido Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('endereco_fornecido', __('models/ordemDeServicoManutencaos.fields.endereco_fornecido').':') !!}
        {!! Form::text('endereco_fornecido', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Vis A Vis Fornecido Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('vis_a_vis_fornecido', __('models/ordemDeServicoManutencaos.fields.vis_a_vis_fornecido').':') !!}
        {!! Form::text('vis_a_vis_fornecido', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Referencia Fornecido Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('referencia_fornecido', __('models/ordemDeServicoManutencaos.fields.referencia_fornecido').':') !!}
        {!! Form::text('referencia_fornecido', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Dados Complementares Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('dados_complementares', __('models/ordemDeServicoManutencaos.fields.dados_complementares').':') !!}
        {!! Form::text('dados_complementares', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Servico Solicitado Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('servico_solicitado', __('models/ordemDeServicoManutencaos.fields.servico_solicitado').':') !!}
        {!! Form::text('servico_solicitado', null, ['class' => 'form-control']) !!}
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
        <h3>Passo 3 de 5</h3>
    </div>
    <!-- Braco Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('braco', __('models/ordemDeServicoManutencaos.fields.braco').':') !!}
        {!! Form::select('braco',['1M' => '1M','2M' => '2M','3M' => '3M'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Suporte Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('suporte', __('models/ordemDeServicoManutencaos.fields.suporte').':') !!}
        {!! Form::select('suporte', ['Reto' => 'Reto','Curvo' => 'Curvo'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Conector Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('conector', __('models/ordemDeServicoManutencaos.fields.conector').':') !!}
        {!! Form::select('conector', ['Cunha' => 'Cunha', 'Pré-Isolado' => 'Pré-Isolado'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Luminaria Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('luminaria', __('models/ordemDeServicoManutencaos.fields.luminaria').':') !!}
        {!! Form::select('luminaria', ['Aberta' => 'Aberta','Fechada' => 'Fechada','Pétala' => 'Pétala','Cutoff' => 'Cutoff', 'Outro' => 'Outro'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Vs Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('vs', __('models/ordemDeServicoManutencaos.fields.vs').':') !!}
        {!! Form::select('vs', ['70W' => '70W','100W' => '100W','150W' => '150W','250W' => '250W','400W' => '400W','1000W' => '1000W'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Lampada Mvw Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('lampada_mvw', __('models/ordemDeServicoManutencaos.fields.lampada_mvw').':') !!}
        {!! Form::select('lampada_mvw', ['70W' => '70W','100W' => '100W','150W' => '150W','250W' => '250W','400W' => '400W','1000W' => '1000W'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Mista Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('mista', __('models/ordemDeServicoManutencaos.fields.mista').':') !!}
        {!! Form::select('mista', ['160W' => '160W','250W' => '250W','500W' => '500W'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Reator Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('reator', __('models/ordemDeServicoManutencaos.fields.reator').':') !!}
        {!! Form::select('reator', ['70W' => '70W','100W' => '100W','150W' => '150W','250W' => '250W','400W' => '400W','1000W' => '1000W'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Tipo Reator Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tipo_reator', __('models/ordemDeServicoManutencaos.fields.tipo_reator').':') !!}
        {!! Form::select('tipo_reator', ['Interno' => 'Interno','Externo' => 'Externo'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Rele Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('rele', __('models/ordemDeServicoManutencaos.fields.rele').':') !!}
        {!! Form::select('rele', ['NA' => 'NA','NF' => 'NF'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Base Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('base', __('models/ordemDeServicoManutencaos.fields.base').':') !!}
        {!! Form::select('base', ['No Poste' => 'No Poste','Na Luminária' => 'Na Luminária'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Manutencao Em Poste Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('manutencao_em_poste', __('models/ordemDeServicoManutencaos.fields.manutencao_em_poste').':') !!}
        {!! Form::select('manutencao_em_poste', ['70W' => '70W','100W' => '100W','150W' => '150W','250W' => '250W','400W' => '400W','1000W' => '1000W'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Manutencao Em Topo De Poste Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('manutencao_em_topo_de_poste', __('models/ordemDeServicoManutencaos.fields.manutencao_em_topo_de_poste').':') !!}
        {!! Form::select('manutencao_em_topo_de_poste', ['1 pétala' => '1 pétala','2 pétalas' => '2 pétalas','3 pétalas' => '3 pétalas','4 pétalas' => '4 pétalas','5 pétalas' => '5 pétalas','6 pétalas' => '6 pétalas','7 ou 8 pétalas' => '7 ou 8 pétalas'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12">

        <div style="display: flex; justify-content: space-between">
            <a class="btn btn-default" onclick="$('#passo-3').css('display', 'none'); $('#passo-2').css('display', 'block')"><i class="fa fa-arrow-left"></i> Voltar</a>
            <a class="btn btn-primary" onclick="$('#passo-3').css('display', 'none'); $('#passo-4').css('display', 'block')">Próximo <i class="fa fa-arrow-right"></i></a>
        </div>

    </div>

</div>

<div id="passo-4" style="display: none">
    <div class="form-group col-sm-12">
        <h3>Passo 4 de 5</h3>
    </div>

    <div class="form-group col-sm-12" style="border-radius: 1px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-list"></i> Itens
                {{--                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Adicionar item</button>--}}
                <div class="clearfix"></div>
            </div>
            <div class="panel-body container-items">
                @if(isset($ordemDeServicoManutencao) && count($ordemDeServicoManutencao->itensOs) > 0)
                    @foreach($ordemDeServicoManutencao->itensOs as $index => $itemOs)
                        @include('itens_os.fields-os')
                    @endforeach
                @else
                    @php($index = 0)
                    @include('itens_os.fields-os')
                @endif
                <button type="button" class="pull-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Adicionar item</button>
            </div>

        </div>

    </div>

    <div class="form-group col-sm-12">

        <div style="display: flex; justify-content: space-between">
            <a class="btn btn-default" onclick="$('#passo-4').css('display', 'none'); $('#passo-3').css('display', 'block')"><i class="fa fa-arrow-left"></i> Voltar</a>
            <a class="btn btn-primary" onclick="$('#passo-4').css('display', 'none'); $('#passo-5').css('display', 'block')">Próximo <i class="fa fa-arrow-right"></i></a>
        </div>

    </div>
</div>

<div id="passo-5" style="display: none">
    <div class="form-group col-sm-12">
        <h3>Passo 5 de 5</h3>
    </div>
    <!-- Cabo Turma Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cabo_turma', __('models/ordemDeServicoManutencaos.fields.cabo_turma').':') !!}
        {!! Form::text('cabo_turma', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Supervisor Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('supervisor', __('models/ordemDeServicoManutencaos.fields.supervisor').':') !!}
        {!! Form::text('supervisor', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Eletricista Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('eletricista', __('models/ordemDeServicoManutencaos.fields.eletricista').':') !!}
        {!! Form::text('eletricista', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Executada Em Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('executada_em', __('models/ordemDeServicoManutencaos.fields.executada_em').':') !!}
        {!! Form::text('executada_em', null, ['class' => 'form-control','id'=>'executada_em']) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#executada_em').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
    @endpush


<!-- Status Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('status', __('models/ordemDeServicoManutencaos.fields.status').':') !!}
        {!! Form::select('status',[0 => 'Pendente', 1 => 'Fechado'], null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <div style="display: flex; justify-content: space-between">
            <a class="btn btn-default" onclick="$('#passo-5').css('display', 'none'); $('#passo-4').css('display', 'block')"><i class="fa fa-arrow-left"></i> Voltar</a>
            {!! Form::submit(__('crud.save'), ['class' => 'btn btn-success']) !!}
        </div>

    </div>

</div>

<script type="text/javascript">
    var i = $(".item").length;
    var item = $(".item:first").clone();

    $(document).on( "click", '.add-item', function () {
        newitem = $(item).clone();

        $(newitem).find('#material').attr('name', `ItemOs[${i}][material]`);
        $(newitem).find('#qtd').attr('name', `ItemOs[${i}][qtd]`);
        $(newitem).find('#defeito_encontrado').attr('name', `ItemOs[${i}][defeito_encontrado]`);
        $(newitem).find('#causa_provavel').attr('name', `ItemOs[${i}][causa_provavel]`);

        $(newitem).find('#material').val('');
        $(newitem).find('#qtd').val('');
        $(newitem).find('#defeito_encontrado').val('');
        $(newitem).find('#causa_provavel').val('');

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
