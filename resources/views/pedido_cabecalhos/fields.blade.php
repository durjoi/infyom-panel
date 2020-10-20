<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/pedidoCabecalhos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Centro Custo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centro_custo', __('models/pedidoCabecalhos.fields.centro_custo').':') !!}
    {!! Form::text('centro_custo', null, ['class' => 'form-control']) !!}
</div>


<!-- Almoxarifado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('almoxarifado', __('models/pedidoCabecalhos.fields.almoxarifado').':') !!}
    {!! Form::text('almoxarifado', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Fixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_fixo', __('models/pedidoCabecalhos.fields.telefone_fixo').':') !!}
    {!! Form::text('telefone_fixo', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_celular', __('models/pedidoCabecalhos.fields.telefone_celular').':') !!}
    {!! Form::text('telefone_celular', null, ['class' => 'form-control']) !!}
</div>


<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', __('models/pedidoCabecalhos.fields.cnpj').':') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>


<!-- Inscricao Estadual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inscricao_estadual', __('models/pedidoCabecalhos.fields.inscricao_estadual').':') !!}
    {!! Form::text('inscricao_estadual', null, ['class' => 'form-control']) !!}
</div>


<!-- Gerente Geral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gerente_geral', __('models/pedidoCabecalhos.fields.gerente_geral').':') !!}
    {!! Form::text('gerente_geral', null, ['class' => 'form-control']) !!}
</div>


<!-- Encarregado Eletrica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encarregado_eletrica', __('models/pedidoCabecalhos.fields.encarregado_eletrica').':') !!}
    {!! Form::text('encarregado_eletrica', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/pedidoCabecalhos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/pedidoCabecalhos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidoCabecalhos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
