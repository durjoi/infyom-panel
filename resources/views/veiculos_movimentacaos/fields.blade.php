<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/veiculosMovimentacaos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idveiculos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idveiculos', __('models/veiculosMovimentacaos.fields.idveiculos').':') !!}
    {!! Form::select('idveiculos', \App\Models\veiculos::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Saida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('saida', __('models/veiculosMovimentacaos.fields.saida').':') !!}
    {!! Form::date('saida', null, ['class' => 'form-control','id'=>'saida']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#saida').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Retorno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('retorno', __('models/veiculosMovimentacaos.fields.retorno').':') !!}
    {!! Form::date('retorno', null, ['class' => 'form-control','id'=>'retorno']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#retorno').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/veiculosMovimentacaos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/veiculosMovimentacaos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('veiculosMovimentacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
