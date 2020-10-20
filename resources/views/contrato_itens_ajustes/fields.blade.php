<!-- Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_inicio', __('models/contratoItensAjustes.fields.data_inicio').':') !!}
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


<!-- Ajuste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ajuste', __('models/contratoItensAjustes.fields.ajuste').':') !!}
    {!! Form::text('ajuste', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/contratoItensAjustes.fields.incluidodoem').':') !!}
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
    {!! Form::label('id_contrato', __('models/contratoItensAjustes.fields.id_contrato').':') !!}
    {!! Form::select('id_contrato', \App\Models\Contratos::orderBy('contrato_numero')->pluck('contrato_numero', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/contratoItensAjustes.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/contratoItensAjustes.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contratoItensAjustes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
