<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/veiculos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Placa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('placa', __('models/veiculos.fields.placa').':') !!}
    {!! Form::text('placa', null, ['class' => 'form-control']) !!}
</div>


<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', __('models/veiculos.fields.descricao').':') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', __('models/veiculos.fields.ano').':') !!}
    {!! Form::number('ano', null, ['class' => 'form-control']) !!}
</div>


<!-- Propriedade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('propriedade', __('models/veiculos.fields.propriedade').':') !!}
    {!! Form::text('propriedade', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/veiculos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/veiculos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('veiculos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
