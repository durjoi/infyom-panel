<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', __('models/empregados.fields.nome').':') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Funcao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('funcao', __('models/empregados.fields.funcao').':') !!}
    {!! Form::text('funcao', null, ['class' => 'form-control']) !!}
</div>


<!-- Admissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admissao', __('models/empregados.fields.admissao').':') !!}
    {!! Form::date('admissao', null, ['class' => 'form-control','id'=>'admissao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#admissao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Desligamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desligamento', __('models/empregados.fields.desligamento').':') !!}
    {!! Form::date('desligamento', null, ['class' => 'form-control','id'=>'desligamento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#desligamento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/empregados.fields.situacao').':') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/empregados.fields.incluidodoem').':') !!}
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


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/empregados.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empregados.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
