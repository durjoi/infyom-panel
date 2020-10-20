<!-- Valor Os Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_os', __('models/faturaEventosOs.fields.valor_os').':') !!}
    {!! Form::text('valor_os', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/faturaEventosOs.fields.incluidodoem').':') !!}
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


<!-- Id Factura Eventos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_factura_eventos', __('models/faturaEventosOs.fields.id_factura_eventos').':') !!}
    {!! Form::select('id_factura_eventos', \App\Models\fatura_evento::orderBy('numero')->pluck('numero', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Eventos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_eventos', __('models/faturaEventosOs.fields.id_eventos').':') !!}
    {!! Form::select('id_eventos', \App\Models\Eventos::orderBy('evento_descricao')->pluck('evento_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/faturaEventosOs.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/faturaEventosOs.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faturaEventosOs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
