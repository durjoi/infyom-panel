<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/turmas.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Cabo Turma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cabo_turma', __('models/turmas.fields.cabo_turma').':') !!}
    {!! Form::text('cabo_turma', null, ['class' => 'form-control']) !!}
</div>


<!-- Outros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outros', __('models/turmas.fields.outros').':') !!}
    {!! Form::text('outros', null, ['class' => 'form-control']) !!}
</div>


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/turmas.fields.situacao').':') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/turmas.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/turmas.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('turmas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
