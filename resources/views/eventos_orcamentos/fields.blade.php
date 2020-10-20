<!-- Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade', __('models/eventosOrcamentos.fields.quantidade').':') !!}
    {!! Form::text('quantidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/eventosOrcamentos.fields.incluidodoem').':') !!}
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


<!-- Id Eventos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_eventos', __('models/eventosOrcamentos.fields.id_eventos').':') !!}
    {!! Form::select('id_eventos', \App\Models\Eventos::orderBy('evento_descricao')->pluck('evento_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Contrato Itens Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_contrato_itens', __('models/eventosOrcamentos.fields.id_contrato_itens').':') !!}
    {!! Form::select('id_contrato_itens', \App\Models\Contrato_itens::orderBy('contrato_itens_descricao')->pluck('contrato_itens_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/eventosOrcamentos.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('eventosOrcamentos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
