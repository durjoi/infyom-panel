<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/ipcontaip11s.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Reg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_reg', __('models/ipcontaip11s.fields.tipo_reg').':') !!}
    {!! Form::text('tipo_reg', null, ['class' => 'form-control']) !!}
</div>


<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', __('models/ipcontaip11s.fields.cnpj').':') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cliente', __('models/ipcontaip11s.fields.cod_cliente').':') !!}
    {!! Form::number('cod_cliente', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_contrato', __('models/ipcontaip11s.fields.cod_contrato').':') !!}
    {!! Form::number('cod_contrato', null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Multiservico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_multiservico', __('models/ipcontaip11s.fields.cod_multiservico').':') !!}
    {!! Form::number('cod_multiservico', null, ['class' => 'form-control']) !!}
</div>


<!-- Compl Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compl_nome', __('models/ipcontaip11s.fields.compl_nome').':') !!}
    {!! Form::text('compl_nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Rua Av Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_rua_av', __('models/ipcontaip11s.fields.endereco_rua_av').':') !!}
    {!! Form::text('endereco_rua_av', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Compl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_compl', __('models/ipcontaip11s.fields.endereco_compl').':') !!}
    {!! Form::text('endereco_compl', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_bairro', __('models/ipcontaip11s.fields.endereco_bairro').':') !!}
    {!! Form::text('endereco_bairro', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Municipio Uf Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_municipio_uf_cep', __('models/ipcontaip11s.fields.endereco_municipio_uf_cep').':') !!}
    {!! Form::text('endereco_municipio_uf_cep', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipano', __('models/ipcontaip11s.fields.contaipano').':') !!}
    {!! Form::number('contaipano', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipmes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipmes', __('models/ipcontaip11s.fields.contaipmes').':') !!}
    {!! Form::text('contaipmes', null, ['class' => 'form-control']) !!}
</div>


<!-- Contaipdatainclusao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipdatainclusao', __('models/ipcontaip11s.fields.contaipdatainclusao').':') !!}
    {!! Form::date('contaipdatainclusao', null, ['class' => 'form-control','id'=>'contaipdatainclusao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#contaipdatainclusao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Contaipusuariologin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contaipusuariologin', __('models/ipcontaip11s.fields.contaipusuariologin').':') !!}
    {!! Form::text('contaipusuariologin', null, ['class' => 'form-control']) !!}
</div>


<!-- Segmento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segmento', __('models/ipcontaip11s.fields.segmento').':') !!}
    {!! Form::text('segmento', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ipcontaip11s.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
