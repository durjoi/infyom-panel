<!-- Protocolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('protocolo', __('models/sequencials.fields.protocolo').':') !!}
    {!! Form::number('protocolo', null, ['class' => 'form-control']) !!}
</div>


<!-- Entrada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entrada', __('models/sequencials.fields.entrada').':') !!}
    {!! Form::number('entrada', null, ['class' => 'form-control']) !!}
</div>


<!-- Saida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('saida', __('models/sequencials.fields.saida').':') !!}
    {!! Form::number('saida', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_numero', __('models/sequencials.fields.poste_numero').':') !!}
    {!! Form::number('poste_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Obras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obras', __('models/sequencials.fields.obras').':') !!}
    {!! Form::number('obras', null, ['class' => 'form-control']) !!}
</div>


<!-- Eventos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eventos', __('models/sequencials.fields.eventos').':') !!}
    {!! Form::number('eventos', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sequencials.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
