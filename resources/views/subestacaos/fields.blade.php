<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/subestacaos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Subestacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subestacao', __('models/subestacaos.fields.subestacao').':') !!}
    {!! Form::text('subestacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Transformador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transformador', __('models/subestacaos.fields.transformador').':') !!}
    {!! Form::text('transformador', null, ['class' => 'form-control']) !!}
</div>


<!-- Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instalacao', __('models/subestacaos.fields.instalacao').':') !!}
    {!! Form::text('instalacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Barramento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barramento', __('models/subestacaos.fields.barramento').':') !!}
    {!! Form::text('barramento', null, ['class' => 'form-control']) !!}
</div>


<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', __('models/subestacaos.fields.bairro').':') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>


<!-- Tensao Secundaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tensao_secundaria', __('models/subestacaos.fields.tensao_secundaria').':') !!}
    {!! Form::text('tensao_secundaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Fases Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fases', __('models/subestacaos.fields.fases').':') !!}
    {!! Form::text('fases', null, ['class' => 'form-control']) !!}
</div>


<!-- Kvan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kvan', __('models/subestacaos.fields.kvan').':') !!}
    {!! Form::text('kvan', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/subestacaos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/subestacaos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('subestacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
