<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/obrasOrcamentos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idobras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idobras', __('models/obrasOrcamentos.fields.idobras').':') !!}
    {!! Form::select('idobras', \App\Models\obras::orderBy('protocolo')->pluck('protocolo', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idcontratoitens Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcontratoitens', __('models/obrasOrcamentos.fields.idcontratoitens').':') !!}
    {!! Form::select('idcontratoitens', \App\Models\Contrato_itens::orderBy('contrato_itens_descricao')->pluck('contrato_itens_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Quantidade Mo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_mo', __('models/obrasOrcamentos.fields.quantidade_mo').':') !!}
    {!! Form::number('quantidade_mo', null, ['class' => 'form-control']) !!}
</div>


<!-- Origem Mo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origem_mo', __('models/obrasOrcamentos.fields.origem_mo').':') !!}
    {!! Form::text('origem_mo', null, ['class' => 'form-control']) !!}
</div>


<!-- Quantidade Mt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_mt', __('models/obrasOrcamentos.fields.quantidade_mt').':') !!}
    {!! Form::number('quantidade_mt', null, ['class' => 'form-control']) !!}
</div>


<!-- Origem Mt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origem_mt', __('models/obrasOrcamentos.fields.origem_mt').':') !!}
    {!! Form::text('origem_mt', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/obrasOrcamentos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/obrasOrcamentos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('obrasOrcamentos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
