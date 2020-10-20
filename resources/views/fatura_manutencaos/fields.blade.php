<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('models/faturaManutencaos.fields.numero').':') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', __('models/faturaManutencaos.fields.ano').':') !!}
    {!! Form::number('ano', null, ['class' => 'form-control']) !!}
</div>


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/faturaManutencaos.fields.situacao').':') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Aberta Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aberta_em', __('models/faturaManutencaos.fields.aberta_em').':') !!}
    {!! Form::date('aberta_em', null, ['class' => 'form-control','id'=>'aberta_em']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#aberta_em').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Aberta Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aberta_id_usuario', __('models/faturaManutencaos.fields.aberta_id_usuario').':') !!}
    {!! Form::select('aberta_id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Encaminhada Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encaminhada_em', __('models/faturaManutencaos.fields.encaminhada_em').':') !!}
    {!! Form::date('encaminhada_em', null, ['class' => 'form-control','id'=>'encaminhada_em']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#encaminhada_em').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Encaminhada Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encaminhada_id_usuario', __('models/faturaManutencaos.fields.encaminhada_id_usuario').':') !!}
    {!! Form::select('encaminhada_id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Pago Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pago_em', __('models/faturaManutencaos.fields.pago_em').':') !!}
    {!! Form::date('pago_em', null, ['class' => 'form-control','id'=>'pago_em']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pago_em').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Pago Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pago_id_usuario', __('models/faturaManutencaos.fields.pago_id_usuario').':') !!}
    {!! Form::select('pago_id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_inicio', __('models/faturaManutencaos.fields.data_inicio').':') !!}
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
    {!! Form::label('data_termino', __('models/faturaManutencaos.fields.data_termino').':') !!}
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


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/faturaManutencaos.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empresa', __('models/faturaManutencaos.fields.id_empresa').':') !!}
    {!! Form::select('id_empresa', \App\Models\Empresas::orderBy('empresa_nome')->pluck('empresa_nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Meses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_meses', __('models/faturaManutencaos.fields.id_meses').':') !!}
    {!! Form::select('id_meses', \App\Models\meses::orderBy('id')->pluck('mes', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faturaManutencaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
