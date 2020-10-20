<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/logradouros.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_codigo', __('models/logradouros.fields.logradouro_codigo').':') !!}
    {!! Form::number('logradouro_codigo', null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Codigodiv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_codigodiv', __('models/logradouros.fields.logradouro_codigodiv').':') !!}
    {!! Form::number('logradouro_codigodiv', null, ['class' => 'form-control']) !!}
</div>


<!-- Idlogradourotipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlogradourotipo', __('models/logradouros.fields.idlogradourotipo').':') !!}
    {!! Form::select('idlogradourotipo', \App\Models\logradouro_tipo::orderBy('logradouro_tipo_descricao')->pluck('logradouro_tipo_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_titulo', __('models/logradouros.fields.logradouro_titulo').':') !!}
    {!! Form::text('logradouro_titulo', null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Preposicao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_preposicao', __('models/logradouros.fields.logradouro_preposicao').':') !!}
    {!! Form::text('logradouro_preposicao', null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_descricao', __('models/logradouros.fields.logradouro_descricao').':') !!}
    {!! Form::text('logradouro_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Conjunto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_conjunto', __('models/logradouros.fields.logradouro_conjunto').':') !!}
    {!! Form::text('logradouro_conjunto', null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_cep', __('models/logradouros.fields.logradouro_cep').':') !!}
    {!! Form::text('logradouro_cep', null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_estado', __('models/logradouros.fields.logradouro_estado').':') !!}
    {!! Form::text('logradouro_estado', null, ['class' => 'form-control']) !!}
</div>


<!-- Idbairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idbairro', __('models/logradouros.fields.idbairro').':') !!}
    {!! Form::select('idbairro', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Trafego Pedestres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trafego_pedestres', __('models/logradouros.fields.trafego_pedestres').':') !!}
    {!! Form::text('trafego_pedestres', null, ['class' => 'form-control']) !!}
</div>


<!-- Trafego Veiculos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trafego_veiculos', __('models/logradouros.fields.trafego_veiculos').':') !!}
    {!! Form::text('trafego_veiculos', null, ['class' => 'form-control']) !!}
</div>


<!-- Importancia Via Field -->
<div class="form-group col-sm-6">
    {!! Form::label('importancia_via', __('models/logradouros.fields.importancia_via').':') !!}
    {!! Form::text('importancia_via', null, ['class' => 'form-control']) !!}
</div>


<!-- Arborizacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('arborizacao', __('models/logradouros.fields.arborizacao').':') !!}
    {!! Form::text('arborizacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Idempresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idempresa', __('models/logradouros.fields.idempresa').':') !!}
    {!! Form::select('idempresa', \App\Models\Empresas::orderBy('empresa_nome')->pluck('empresa_nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/logradouros.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/logradouros.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('logradouros.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
