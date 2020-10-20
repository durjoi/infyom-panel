<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/faturaObrasOs.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idfaturaobras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfaturaobras', __('models/faturaObrasOs.fields.idfaturaobras').':') !!}
    {!! Form::select('idfaturaobras', \App\Models\fatura_obras::orderBy('numero')->pluck('numero', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idobras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idobras', __('models/faturaObrasOs.fields.idobras').':') !!}
    {!! Form::select('idobras', \App\Models\obras::orderBy('protocolo')->pluck('protocolo', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Os Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_os', __('models/faturaObrasOs.fields.valor_os').':') !!}
    {!! Form::number('valor_os', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/faturaObrasOs.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/faturaObrasOs.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faturaObrasOs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
