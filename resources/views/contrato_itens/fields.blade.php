<!-- Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item', __('models/contratoItens.fields.item').':') !!}
    {!! Form::text('item', null, ['class' => 'form-control']) !!}
</div>


<!-- Contrato Itens Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrato_itens_descricao', __('models/contratoItens.fields.contrato_itens_descricao').':') !!}
    {!! Form::text('contrato_itens_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Mao Obra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_mao_obra', __('models/contratoItens.fields.valor_mao_obra').':') !!}
    {!! Form::text('valor_mao_obra', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_material', __('models/contratoItens.fields.valor_material').':') !!}
    {!! Form::text('valor_material', null, ['class' => 'form-control']) !!}
</div>


<!-- Aplicacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aplicacao', __('models/contratoItens.fields.aplicacao').':') !!}
    {!! Form::text('aplicacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Bloqueio Material Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bloqueio_material', __('models/contratoItens.fields.bloqueio_material').':') !!}
    {!! Form::number('bloqueio_material', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Mao Obra Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_mao_obra_anterior', __('models/contratoItens.fields.valor_mao_obra_anterior').':') !!}
    {!! Form::text('valor_mao_obra_anterior', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Material Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_material_anterior', __('models/contratoItens.fields.valor_material_anterior').':') !!}
    {!! Form::text('valor_material_anterior', null, ['class' => 'form-control']) !!}
</div>


<!-- Fatork Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatork', __('models/contratoItens.fields.fatork').':') !!}
    {!! Form::text('fatork', null, ['class' => 'form-control']) !!}
</div>


<!-- Fatork Operacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatork_operacao', __('models/contratoItens.fields.fatork_operacao').':') !!}
    {!! Form::text('fatork_operacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Tempo Garantia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempo_garantia', __('models/contratoItens.fields.tempo_garantia').':') !!}
    {!! Form::text('tempo_garantia', null, ['class' => 'form-control']) !!}
</div>


<!-- Tempo Garantia Periodo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempo_garantia_periodo', __('models/contratoItens.fields.tempo_garantia_periodo').':') !!}
    {!! Form::text('tempo_garantia_periodo', null, ['class' => 'form-control']) !!}
</div>


<!-- Codigo Produto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_produto', __('models/contratoItens.fields.codigo_produto').':') !!}
    {!! Form::number('codigo_produto', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/contratoItens.fields.incluidodoem').':') !!}
    {!! Form::date('incluidodoem', null, ['class' => 'form-control','id'=>'incluidodoem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#incluidodoem').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Id Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_contrato', __('models/contratoItens.fields.id_contrato').':') !!}
    {!! Form::select('id_contrato',\App\Models\Contratos::orderBy('contrato_numero')->pluck('contrato_numero', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Unidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_unidade', __('models/contratoItens.fields.id_unidade').':') !!}
    {!! Form::select('id_unidade',\App\Models\unidade::orderBy('abreviado')->pluck('abreviado', 'id'),  null, ['class' => 'form-control']) !!}
</div>


<!-- Id Marca Produto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_marca_produto', __('models/contratoItens.fields.id_marca_produto').':') !!}
    {!! Form::select('id_marca_produto', \App\Models\marca::orderBy('marca_descricao')->pluck('marca_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/contratoItens.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/contratoItens.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contratoItens.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
