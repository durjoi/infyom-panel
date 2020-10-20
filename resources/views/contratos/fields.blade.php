<!-- Contrato Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrato_numero', __('models/contratos.fields.contrato_numero').':') !!}
    {!! Form::text('contrato_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Contrato Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrato_tipo', __('models/contratos.fields.contrato_tipo').':') !!}
    {!! Form::text('contrato_tipo', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_inicio', __('models/contratos.fields.data_inicio').':') !!}
    {!! Form::date('data_inicio', null, ['class' => 'form-control','id'=>'data_inicio']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_inicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Data Termino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_termino', __('models/contratos.fields.data_termino').':') !!}
    {!! Form::date('data_termino', null, ['class' => 'form-control','id'=>'data_termino']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_termino').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Fatork Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fatork', __('models/contratos.fields.fatork').':') !!}
    {!! Form::text('fatork', null, ['class' => 'form-control']) !!}
</div>


<!-- Operacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operacao', __('models/contratos.fields.operacao').':') !!}
    {!! Form::text('operacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/contratos.fields.incluidodoem').':') !!}
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


<!-- Id Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empresa', __('models/contratos.fields.id_empresa').':') !!}
    {!! Form::select('id_empresa', \App\Models\Empresas::orderBy('empresa_nome')->pluck('empresa_nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/contratos.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/contratos.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contratos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
