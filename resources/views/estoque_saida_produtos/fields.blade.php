<!-- Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade', __('models/estoqueSaidaProdutos.fields.quantidade').':') !!}
    {!! Form::text('quantidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_unitario', __('models/estoqueSaidaProdutos.fields.valor_unitario').':') !!}
    {!! Form::text('valor_unitario', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/estoqueSaidaProdutos.fields.incluidodoem').':') !!}
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


<!-- Id Saida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_saida', __('models/estoqueSaidaProdutos.fields.id_saida').':') !!}
    {!! Form::text('id_saida', null, ['class' => 'form-control']) !!}
</div>


<!-- Id Productos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_productos', __('models/estoqueSaidaProdutos.fields.id_productos').':') !!}
    {!! Form::select('id_productos', \App\Models\produtos::orderBy('produtos_descricao')->pluck('produtos_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/estoqueSaidaProdutos.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/estoqueSaidaProdutos.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estoqueSaidaProdutos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
