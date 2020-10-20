<!-- Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuario', __('models/perfils.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idperfilcadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idperfilcadastro', __('models/perfils.fields.idperfilcadastro').':') !!}
    {!! Form::select('idperfilcadastro', \App\Models\perfil_cadastro::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/perfils.fields.incluidoem').':') !!}
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


<!-- Idusuario Incluido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuario_incluido', __('models/perfils.fields.idusuario_incluido').':') !!}
    {!! Form::select('idusuario_incluido', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('perfils.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
