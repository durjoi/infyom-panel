<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', __('models/fornecedors.fields.cnpj').':') !!}
    {!! Form::number('cnpj', null, ['class' => 'form-control']) !!}
</div>


<!-- Razao Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razao_social', __('models/fornecedors.fields.razao_social').':') !!}
    {!! Form::text('razao_social', null, ['class' => 'form-control']) !!}
</div>


<!-- Fantasia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fantasia', __('models/fornecedors.fields.fantasia').':') !!}
    {!! Form::text('fantasia', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco', __('models/fornecedors.fields.endereco').':') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
</div>


<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('models/fornecedors.fields.numero').':') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento', __('models/fornecedors.fields.complemento').':') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
</div>


<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', __('models/fornecedors.fields.bairro').':') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>


<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', __('models/fornecedors.fields.cidade').':') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Uf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uf', __('models/fornecedors.fields.uf').':') !!}
    {!! Form::text('uf', null, ['class' => 'form-control']) !!}
</div>


<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', __('models/fornecedors.fields.cep').':') !!}
    {!! Form::number('cep', null, ['class' => 'form-control']) !!}
</div>


<!-- Contato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contato', __('models/fornecedors.fields.contato').':') !!}
    {!! Form::text('contato', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', __('models/fornecedors.fields.telefone').':') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>


<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', __('models/fornecedors.fields.fax').':') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>


<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/fornecedors.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Produtos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produtos', __('models/fornecedors.fields.produtos').':') !!}
    {!! Form::text('produtos', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao', __('models/fornecedors.fields.observacao').':') !!}
    {!! Form::text('observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/fornecedors.fields.situacao').':') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/fornecedors.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/fornecedors.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fornecedors.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
