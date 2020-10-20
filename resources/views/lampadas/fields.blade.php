<!-- Lampada Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lampada_descricao', __('models/lampadas.fields.lampada_descricao').':') !!}
    {!! Form::text('lampada_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Lampada Potencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lampada_potencia', __('models/lampadas.fields.lampada_potencia').':') !!}
    {!! Form::number('lampada_potencia', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/lampadas.fields.incluidoem').':') !!}
    {!! Form::date('incluidoem', null, ['class' => 'form-control','id'=>'incluidoem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#incluidoem').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuario', __('models/lampadas.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Lampada Abreveada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lampada_abreveada', __('models/lampadas.fields.lampada_abreveada').':') !!}
    {!! Form::text('lampada_abreveada', null, ['class' => 'form-control']) !!}
</div>


<!-- Perda Rator Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perda_rator', __('models/lampadas.fields.perda_rator').':') !!}
    {!! Form::number('perda_rator', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('lampadas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
