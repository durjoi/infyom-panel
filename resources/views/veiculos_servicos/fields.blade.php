<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/veiculosServicos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idveiculos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idveiculos', __('models/veiculosServicos.fields.idveiculos').':') !!}
    {!! Form::select('idveiculos', \App\Models\veiculos::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Data Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_servico', __('models/veiculosServicos.fields.data_servico').':') !!}
    {!! Form::date('data_servico', null, ['class' => 'form-control','id'=>'data_servico']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_servico').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Descricao Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao_servico', __('models/veiculosServicos.fields.descricao_servico').':') !!}
    {!! Form::text('descricao_servico', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_total', __('models/veiculosServicos.fields.valor_total').':') !!}
    {!! Form::number('valor_total', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/veiculosServicos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/veiculosServicos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('veiculosServicos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
