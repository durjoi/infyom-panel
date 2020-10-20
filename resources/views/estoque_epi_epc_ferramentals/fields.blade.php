<!-- Autorizado Por Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autorizado_por', __('models/estoqueEpiEpcFerramentals.fields.autorizado_por').':') !!}
    {!! Form::text('autorizado_por', null, ['class' => 'form-control']) !!}
</div>


<!-- Actualicao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actualicao', __('models/estoqueEpiEpcFerramentals.fields.actualicao').':') !!}
    {!! Form::text('actualicao', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao', __('models/estoqueEpiEpcFerramentals.fields.observacao').':') !!}
    {!! Form::text('observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/estoqueEpiEpcFerramentals.fields.incluidodoem').':') !!}
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
    {!! Form::label('id_operacao', __('models/estoqueEpiEpcFerramentals.fields.id_operacao').':') !!}
    {!! Form::select('id_operacao', \App\Models\operacao::orderBy('operacao')->pluck('operacao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Empregados Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empregados', __('models/estoqueEpiEpcFerramentals.fields.id_empregados').':') !!}
    {!! Form::select('id_empregados', \App\Models\Empregados::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/estoqueEpiEpcFerramentals.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/estoqueEpiEpcFerramentals.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estoqueEpiEpcFerramentals.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
