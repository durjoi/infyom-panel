<!-- Empresa Nome Field -->
<div class="form-group">
    {!! Form::label('empresa_nome', __('empresa_nome').':') !!}
    <p>{{ $empresas->empresa_nome }}</p>
</div>


<!-- Empresa Descricao Field -->
<div class="form-group">
    {!! Form::label('empresa_descricao', __('empresa_descricao').':') !!}
    <p>{{ $empresas->empresa_descricao }}</p>
</div>


<!-- Incluidodoem Field -->
<div class="form-group">
    {!! Form::label('incluidodoem', __('incluidodoem').':') !!}
    <p>{{ $empresas->incluidodoem }}</p>
</div>


<!-- Id Usuario Field -->
<div class="form-group">
    {!! Form::label('id_usuario', __('id_usuario').':') !!}
    <p>{{ $empresas->id_usuario }}</p>
</div>


