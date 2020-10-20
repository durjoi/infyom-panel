<!-- Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade', __('models/estoqueEpiEpcFerramentalProdutos.fields.quantidade').':') !!}
    {!! Form::text('quantidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_unitario', __('models/estoqueEpiEpcFerramentalProdutos.fields.valor_unitario').':') !!}
    {!! Form::text('valor_unitario', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/estoqueEpiEpcFerramentalProdutos.fields.incluidodoem').':') !!}
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


<!-- Id Estoque Epi Epc Ferramental Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_estoque_epi_epc_ferramental', __('models/estoqueEpiEpcFerramentalProdutos.fields.id_estoque_epi_epc_ferramental').':') !!}
    {!! Form::select('id_estoque_epi_epc_ferramental', \App\Models\Estoque_epi_epc_ferramental::orderBy('observacao')->pluck('observacao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Produtos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_produtos', __('models/estoqueEpiEpcFerramentalProdutos.fields.id_produtos').':') !!}
    {!! Form::select('id_produtos', \App\Models\produtos::orderBy('produtos_descricao')->pluck('produtos_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/estoqueEpiEpcFerramentalProdutos.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/estoqueEpiEpcFerramentalProdutos.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estoqueEpiEpcFerramentalProdutos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
