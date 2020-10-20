<!-- Reator Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reator_descricao', __('models/reators.fields.reator_descricao').':') !!}
    {!! Form::text('reator_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Reator Perda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reator_perda', __('models/reators.fields.reator_perda').':') !!}
    {!! Form::number('reator_perda', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/reators.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/reators.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('reators.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
