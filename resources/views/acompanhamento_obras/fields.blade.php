


<div id="passo-1">
    <div class="form-group col-sm-12">
        <h3>Passo 1 de 3</h3>
    </div>
    <!-- Data Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('data', __('models/acompanhamentoObras.fields.data').':') !!}
        {!! Form::text('data', isset($acompanhamentoObras) ? $acompanhamentoObras->data->format('d/m/Y') : null, ['class' => 'form-control','id'=>'data']) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#data').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false
            })
        </script>
@endpush
<!-- Fiscal Pmrsj Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fiscal_pmrsj', __('models/acompanhamentoObras.fields.fiscal_pmrsj').':') !!}
        {!! Form::text('fiscal_pmrsj', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Fiscal Sativa Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fiscal_sativa', __('models/acompanhamentoObras.fields.fiscal_sativa').':') !!}
        {!! Form::text('fiscal_sativa', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Reators Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('reators_id', __('models/acompanhamentoObras.fields.reators_id').':') !!}
        {!! Form::select('reators_id',\App\Models\reator::orderBy('reator_descricao')->pluck('reator_descricao', 'id'), null, ['class' => 'form-control']) !!}
    </div>


    <!-- Lampadas Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('lampadas_id', __('models/acompanhamentoObras.fields.lampadas_id').':') !!}
        {!! Form::select('lampadas_id', \App\Models\lampada::orderBy('lampada_descricao')->pluck('lampada_descricao', 'id'), null, ['class' => 'form-control']) !!}
    </div>


    <!-- Reles Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('reles_id', __('models/acompanhamentoObras.fields.reles_id').':') !!}
        {!! Form::select('reles_id', \App\Models\rele::orderBy('rele_descricao')->pluck('rele_descricao', 'id'), null, ['class' => 'form-control']) !!}
    </div>


    <!-- Bases Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('bases_id', __('models/acompanhamentoObras.fields.bases_id').':') !!}
        {!! Form::select('bases_id', \App\Models\Bases::orderBy('base_descricao')->pluck('base_descricao', 'id'), null, ['class' => 'form-control']) !!}
    </div>


    <!-- Luminarias Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('luminarias_id', __('models/acompanhamentoObras.fields.luminarias_id').':') !!}
        {!! Form::select('luminarias_id', \App\Models\luminaria::orderBy('luminaria_descricao')->pluck('luminaria_descricao', 'id'), null, ['class' => 'form-control']) !!}
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
                @if(isset($acompanhamentoObras) && count($acompanhamentoObras->pontos) > 0)
                    @foreach($acompanhamentoObras->pontos as $index => $ponto)
                        @include('pontos.fields-acompanhamento-obras')
                    @endforeach
                @else
                    @php($index = 0)
                    @include('pontos.fields-acompanhamento-obras')
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

    <!-- Protocolo Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('protocolo', __('models/acompanhamentoObras.fields.protocolo').':') !!}
        {!! Form::text('protocolo', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Material Utilizado Sativa Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('material_utilizado_sativa', __('models/acompanhamentoObras.fields.material_utilizado_sativa').':') !!}
        {!! Form::text('material_utilizado_sativa', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Material Utilizado Sesp Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('material_utilizado_sesp', __('models/acompanhamentoObras.fields.material_utilizado_sesp').':') !!}
        {!! Form::text('material_utilizado_sesp', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Observacoes Extras Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('observacoes_extras', __('models/acompanhamentoObras.fields.observacoes_extras').':') !!}
        {!! Form::text('observacoes_extras', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Observacoes Sativa Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('observacoes_sativa', __('models/acompanhamentoObras.fields.observacoes_sativa').':') !!}
        {!! Form::text('observacoes_sativa', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Recebimento Sesp Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('recebimento_sesp', __('models/acompanhamentoObras.fields.recebimento_sesp').':') !!}
        {!! Form::text('recebimento_sesp', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
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

        $(newitem).find('#numero_do_poste').attr('name', `Ponto[${i}][numero_do_poste]`);
        $(newitem).find('#cadastro_sativa').attr('name', `Ponto[${i}][cadastro_sativa]`);
        $(newitem).find('#trafo').attr('name', `Ponto[${i}][trafo]`);
        $(newitem).find('#endereco_descricao').attr('name', `Ponto[${i}][endereco_descricao]`);

        $(newitem).find('#numero_do_poste').val('');
        $(newitem).find('#cadastro_sativa').val('');
        $(newitem).find('#trafo').val('');
        $(newitem).find('#endereco_descricao').val('');

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
