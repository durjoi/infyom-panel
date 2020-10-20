<!-- Razao Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razao_social', __('models/clientes.fields.razao_social').':') !!}
    {!! Form::text('razao_social', null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Fantasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_fantasi', __('models/clientes.fields.nome_fantasi').':') !!}
    {!! Form::text('nome_fantasi', null, ['class' => 'form-control']) !!}
</div>


<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', __('models/clientes.fields.cnpj').':') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>


<!-- Inscricao Municipal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inscricao_municipal', __('models/clientes.fields.inscricao_municipal').':') !!}
    {!! Form::text('inscricao_municipal', null, ['class' => 'form-control']) !!}
</div>


<!-- Inscricao Estadual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inscricao_estadual', __('models/clientes.fields.inscricao_estadual').':') !!}
    {!! Form::text('inscricao_estadual', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/clientes.fields.incluidodoem').':') !!}
    {!! Form::date('incluidodoem', null, ['class' => 'form-control','id'=>'incluidodoem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#incluidodoem').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/clientes.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/clientes.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clientes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
