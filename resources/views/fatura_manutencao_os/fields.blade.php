<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/faturaManutencaoOs.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idfaturamanutencao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfaturamanutencao', __('models/faturaManutencaoOs.fields.idfaturamanutencao').':') !!}
    {!! Form::select('idfaturamanutencao', \App\Models\Fatura_manutencao::orderBy('numero')->pluck('numero', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idsolicitacaoreclamacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsolicitacaoreclamacao', __('models/faturaManutencaoOs.fields.idsolicitacaoreclamacao').':') !!}
    {!! Form::select('idsolicitacaoreclamacao', \App\Models\solicitacao_reclamacao::orderBy('protocolo_sistema')->pluck('protocolo_sistema', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Os Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_os', __('models/faturaManutencaoOs.fields.valor_os').':') !!}
    {!! Form::number('valor_os', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/faturaManutencaoOs.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/faturaManutencaoOs.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faturaManutencaoOs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
