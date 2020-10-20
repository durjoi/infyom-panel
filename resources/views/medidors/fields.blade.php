<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/medidors.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('models/medidors.fields.numero').':') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Idlogradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlogradouro', __('models/medidors.fields.idlogradouro').':') !!}
    {!! Form::select('idlogradouro', \App\Models\logradouro::orderBy('logradouro_descricao')->pluck('logradouro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idbairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idbairro', __('models/medidors.fields.idbairro').':') !!}
    {!! Form::select('idbairro', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_numero', __('models/medidors.fields.poste_numero').':') !!}
    {!! Form::text('poste_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrato', __('models/medidors.fields.contrato').':') !!}
    {!! Form::text('contrato', null, ['class' => 'form-control']) !!}
</div>


<!-- Capacidade Medicao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidade_medicao', __('models/medidors.fields.capacidade_medicao').':') !!}
    {!! Form::number('capacidade_medicao', null, ['class' => 'form-control']) !!}
</div>


<!-- Capacidade Disjuntor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidade_disjuntor', __('models/medidors.fields.capacidade_disjuntor').':') !!}
    {!! Form::number('capacidade_disjuntor', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/medidors.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/medidors.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('medidors.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
