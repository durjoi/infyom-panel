<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', __('models/datosDoUsuarios.fields.nome').':') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/datosDoUsuarios.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('senha', __('models/datosDoUsuarios.fields.senha').':') !!}
    {!! Form::text('senha', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', __('models/datosDoUsuarios.fields.tipo').':') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Ddd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_ddd', __('models/datosDoUsuarios.fields.telefone_ddd').':') !!}
    {!! Form::text('telefone_ddd', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_numero', __('models/datosDoUsuarios.fields.telefone_numero').':') !!}
    {!! Form::text('telefone_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa', __('models/datosDoUsuarios.fields.empresa').':') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>


<!-- Cargo Setor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo_setor', __('models/datosDoUsuarios.fields.cargo_setor').':') !!}
    {!! Form::text('cargo_setor', null, ['class' => 'form-control']) !!}
</div>


<!-- Direcionar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direcionar', __('models/datosDoUsuarios.fields.direcionar').':') !!}
    {!! Form::text('direcionar', null, ['class' => 'form-control']) !!}
</div>


<!-- Mensagem Instantanea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mensagem_instantanea', __('models/datosDoUsuarios.fields.mensagem_instantanea').':') !!}
    {!! Form::text('mensagem_instantanea', null, ['class' => 'form-control']) !!}
</div>


<!-- Receber Sms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receber_sms', __('models/datosDoUsuarios.fields.receber_sms').':') !!}
    {!! Form::text('receber_sms', null, ['class' => 'form-control']) !!}
</div>


<!-- W Acesso Whatsapp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('w_acesso_whatsapp', __('models/datosDoUsuarios.fields.w_acesso_whatsapp').':') !!}
    {!! Form::text('w_acesso_whatsapp', null, ['class' => 'form-control']) !!}
</div>


<!-- W Menu Consultas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('w_menu_consultas', __('models/datosDoUsuarios.fields.w_menu_consultas').':') !!}
    {!! Form::text('w_menu_consultas', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('datosDoUsuarios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
