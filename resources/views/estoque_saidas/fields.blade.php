<!-- Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante', __('models/estoqueSaidas.fields.solicitante').':') !!}
    {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
</div>


<!-- Autorizado Por Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autorizado_por', __('models/estoqueSaidas.fields.autorizado_por').':') !!}
    {!! Form::text('autorizado_por', null, ['class' => 'form-control']) !!}
</div>


<!-- Actualizacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actualizacao', __('models/estoqueSaidas.fields.actualizacao').':') !!}
    {!! Form::text('actualizacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao', __('models/estoqueSaidas.fields.observacao').':') !!}
    {!! Form::text('observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/estoqueSaidas.fields.incluidodoem').':') !!}
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
    {!! Form::label('id_operacao', __('models/estoqueSaidas.fields.id_operacao').':') !!}
    {!! Form::select('id_operacao', \App\Models\operacao::orderBy('operacao')->pluck('operacao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Obras Estoque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_obras_estoque', __('models/estoqueSaidas.fields.id_obras_estoque').':') !!}
    {!! Form::select('id_obras_estoque', \App\Models\obras_estoque::orderBy('obras_estoque_descricao')->pluck('obras_estoque_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_bairro', __('models/estoqueSaidas.fields.id_bairro').':') !!}
    {!! Form::select('id_bairro', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Turma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_turma', __('models/estoqueSaidas.fields.id_turma').':') !!}
    {!! Form::select('id_turma', \App\Models\turma::orderBy('cabo_turma')->pluck('cabo_turma', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/estoqueSaidas.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/estoqueSaidas.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estoqueSaidas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
