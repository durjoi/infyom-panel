<!-- Idusuario De Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuario_de', __('models/mensagems.fields.idusuario_de').':') !!}
    {!! Form::select('idusuario_de', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idusuario Para Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuario_para', __('models/mensagems.fields.idusuario_para').':') !!}
    {!! Form::select('idusuario_para', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Enviadaem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviadaem', __('models/mensagems.fields.enviadaem').':') !!}
    {!! Form::date('enviadaem', null, ['class' => 'form-control','id'=>'enviadaem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#enviadaem').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', __('models/mensagems.fields.titulo').':') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>


<!-- Corpo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('corpo', __('models/mensagems.fields.corpo').':') !!}
    {!! Form::text('corpo', null, ['class' => 'form-control']) !!}
</div>


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/mensagems.fields.situacao').':') !!}
    {!! Form::number('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mensagems.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
