<!-- Data Operacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_operacao', __('models/estoqueEntradas.fields.data_operacao').':') !!}
    {!! Form::date('data_operacao', null, ['class' => 'form-control','id'=>'data_operacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_operacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Numero Nf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_nf', __('models/estoqueEntradas.fields.numero_nf').':') !!}
    {!! Form::number('numero_nf', null, ['class' => 'form-control']) !!}
</div>


<!-- Numero Rm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_rm', __('models/estoqueEntradas.fields.numero_rm').':') !!}
    {!! Form::number('numero_rm', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao', __('models/estoqueEntradas.fields.observacao').':') !!}
    {!! Form::text('observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/estoqueEntradas.fields.incluidodoem').':') !!}
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


<!-- Id Operacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_operacao', __('models/estoqueEntradas.fields.id_operacao').':') !!}
    {!! Form::select('id_operacao', \App\Models\operacao::orderBy('operacao')->pluck('operacao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Fornecedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_fornecedor', __('models/estoqueEntradas.fields.id_fornecedor').':') !!}
    {!! Form::select('id_fornecedor', \App\Models\fornecedor::orderBy('razao_social')->pluck('razao_social', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Obras Estoque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_obras_estoque', __('models/estoqueEntradas.fields.id_obras_estoque').':') !!}
    {!! Form::select('id_obras_estoque', \App\Models\obras_estoque::orderBy('obras_estoque_descricao')->pluck('obras_estoque_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/estoqueEntradas.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/estoqueEntradas.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estoqueEntradas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
