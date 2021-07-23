<!-- Data Operação Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_operacao', __('models/requisicaos.fields.data_operacao').':') !!}
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


<!-- Operação Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operacao', __('models/requisicaos.fields.operacao').':') !!}
    {!! Form::text('operacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante', __('models/requisicaos.fields.solicitante').':') !!}
    {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
</div>


<!-- Autorizado Por Field -->
<div class="form-group col-sm-6">
    {!! Form::label('autorizado_por', __('models/requisicaos.fields.autorizado_por').':') !!}
    {!! Form::text('autorizado_por', null, ['class' => 'form-control']) !!}
</div>


<!-- Obras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obras', __('models/requisicaos.fields.obras').':') !!}
    {!! Form::text('obras', null, ['class' => 'form-control']) !!}
</div>


<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', __('models/requisicaos.fields.bairro').':') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>


<!-- Turma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turma', __('models/requisicaos.fields.turma').':') !!}
    {!! Form::text('turma', null, ['class' => 'form-control']) !!}
</div>


<!-- Observação Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao', __('models/requisicaos.fields.observacao').':') !!}
    {!! Form::text('observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('requisicaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
