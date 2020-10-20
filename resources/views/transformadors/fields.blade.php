<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/transformadors.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', __('models/transformadors.fields.codigo').':') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>


<!-- Numerocia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numerocia', __('models/transformadors.fields.numerocia').':') !!}
    {!! Form::text('numerocia', null, ['class' => 'form-control']) !!}
</div>


<!-- Idlogradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlogradouro', __('models/transformadors.fields.idlogradouro').':') !!}
    {!! Form::select('idlogradouro', \App\Models\logradouro::orderBy('logradouro_descricao')->pluck('logradouro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idbairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idbairro', __('models/transformadors.fields.idbairro').':') !!}
    {!! Form::select('idbairro', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_numero', __('models/transformadors.fields.poste_numero').':') !!}
    {!! Form::text('poste_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/transformadors.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/transformadors.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transformadors.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
