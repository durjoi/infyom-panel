<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/ipcontaip10s.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Cod Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_cliente', __('models/ipcontaip10s.fields.cod_cliente').':') !!}
    {!! Form::number('cod_cliente', null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', __('models/ipcontaip10s.fields.nome').':') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ipcontaip10s.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
