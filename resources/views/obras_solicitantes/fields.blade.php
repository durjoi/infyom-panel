<!-- Idobras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idobras', __('models/obrasSolicitantes.fields.idobras').':') !!}
    {!! Form::select('idobras', \App\Models\obras::orderBy('protocolo')->pluck('protocolo', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante_nome', __('models/obrasSolicitantes.fields.solicitante_nome').':') !!}
    {!! Form::text('solicitante_nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante_telefone', __('models/obrasSolicitantes.fields.solicitante_telefone').':') !!}
    {!! Form::text('solicitante_telefone', null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante_email', __('models/obrasSolicitantes.fields.solicitante_email').':') !!}
    {!! Form::text('solicitante_email', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/obrasSolicitantes.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/obrasSolicitantes.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('obrasSolicitantes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
