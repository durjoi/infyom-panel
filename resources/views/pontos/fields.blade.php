<!-- Numero Do Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_do_poste', __('models/pontos.fields.numero_do_poste').':') !!}
    {!! Form::number('numero_do_poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Cadastro Sativa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cadastro_sativa', __('models/pontos.fields.cadastro_sativa').':') !!}
    {!! Form::text('cadastro_sativa', null, ['class' => 'form-control']) !!}
</div>


<!-- Trafo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trafo', __('models/pontos.fields.trafo').':') !!}
    {!! Form::text('trafo', null, ['class' => 'form-control']) !!}
</div>


<!-- Endereco Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco_descricao', __('models/pontos.fields.endereco_descricao').':') !!}
    {!! Form::text('endereco_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Acompanhamento Obras Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acompanhamento_obras_id', __('models/pontos.fields.acompanhamento_obras_id').':') !!}
    {!! Form::select('acompanhamento_obras_id', \App\Models\AcompanhamentoObras::orderBy('id')->pluck('id', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pontos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
