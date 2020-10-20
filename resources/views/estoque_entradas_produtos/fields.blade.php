<!-- Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade', __('models/estoqueEntradasProdutos.fields.quantidade').':') !!}
    {!! Form::text('quantidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Dev Mat Novo Def Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dev_mat_novo_def', __('models/estoqueEntradasProdutos.fields.dev_mat_novo_def').':') !!}
    {!! Form::text('dev_mat_novo_def', null, ['class' => 'form-control']) !!}
</div>


<!-- Dev Mat N Apl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dev_mat_n_apl', __('models/estoqueEntradasProdutos.fields.dev_mat_n_apl').':') !!}
    {!! Form::text('dev_mat_n_apl', null, ['class' => 'form-control']) !!}
</div>


<!-- Dev Mat Apl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dev_mat_apl', __('models/estoqueEntradasProdutos.fields.dev_mat_apl').':') !!}
    {!! Form::text('dev_mat_apl', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_unitario', __('models/estoqueEntradasProdutos.fields.valor_unitario').':') !!}
    {!! Form::text('valor_unitario', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_total', __('models/estoqueEntradasProdutos.fields.valor_total').':') !!}
    {!! Form::text('valor_total', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/estoqueEntradasProdutos.fields.incluidodoem').':') !!}
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


<!-- Id Entrada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_entrada', __('models/estoqueEntradasProdutos.fields.id_entrada').':') !!}
    {!! Form::text('id_entrada', null, ['class' => 'form-control']) !!}
</div>


<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', __('models/estoqueEntradasProdutos.fields.id_producto').':') !!}
    {!! Form::select('id_producto', \App\Models\produtos::orderBy('produtos_descricao')->pluck('produtos_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/estoqueEntradasProdutos.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/estoqueEntradasProdutos.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estoqueEntradasProdutos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
