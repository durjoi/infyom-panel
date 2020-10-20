<!-- Material Field -->
<div class="form-group">
    {!! Form::label('material', __('material').':') !!}
    <p>{{ $itensOs->material }}</p>
</div>


<!-- Qtd Field -->
<div class="form-group">
    {!! Form::label('qtd', __('qtd').':') !!}
    <p>{{ $itensOs->qtd }}</p>
</div>


<!-- Defeito Encontrado Field -->
<div class="form-group">
    {!! Form::label('defeito_encontrado', __('defeito_encontrado').':') !!}
    <p>{{ $itensOs->defeito_encontrado }}</p>
</div>


<!-- Causa Provavel Field -->
<div class="form-group">
    {!! Form::label('causa_provavel', __('causa_provavel').':') !!}
    <p>{{ $itensOs->causa_provavel }}</p>
</div>


<!-- Ordem De Servico Manutencao Id Field -->
<div class="form-group">
    {!! Form::label('ordem_de_servico_manutencao_id', __('ordem_de_servico_manutencao_id').':') !!}
    <p>{{ $itensOs->ordem_de_servico_manutencao_id }}</p>
</div>


