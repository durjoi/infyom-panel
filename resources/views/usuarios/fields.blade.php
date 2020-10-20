<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', __('models/usuarios.fields.nome').':') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/usuarios.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('senha', __('models/usuarios.fields.senha').':') !!}
    {!! Form::text('senha', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', __('models/usuarios.fields.tipo').':') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Ddd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_ddd', __('models/usuarios.fields.telefone_ddd').':') !!}
    {!! Form::number('telefone_ddd', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_numero', __('models/usuarios.fields.telefone_numero').':') !!}
    {!! Form::number('telefone_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa', __('models/usuarios.fields.empresa').':') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>


<!-- Cargo Setor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo_setor', __('models/usuarios.fields.cargo_setor').':') !!}
    {!! Form::text('cargo_setor', null, ['class' => 'form-control']) !!}
</div>


<!-- Direcionar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direcionar', __('models/usuarios.fields.direcionar').':') !!}
    {!! Form::text('direcionar', null, ['class' => 'form-control']) !!}
</div>


<!-- Mensagem Instantanea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mensagem_instantanea', __('models/usuarios.fields.mensagem_instantanea').':') !!}
    {!! Form::number('mensagem_instantanea', null, ['class' => 'form-control']) !!}
</div>


<!-- Receber Mensagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receber_mensagem', __('models/usuarios.fields.receber_mensagem').':') !!}
    {!! Form::number('receber_mensagem', null, ['class' => 'form-control']) !!}
</div>


<!-- Receber Sms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receber_sms', __('models/usuarios.fields.receber_sms').':') !!}
    {!! Form::number('receber_sms', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/usuarios.fields.incluidoem').':') !!}
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


<!-- W Acesso Whatsapp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('w_acesso_whatsapp', __('models/usuarios.fields.w_acesso_whatsapp').':') !!}
    {!! Form::number('w_acesso_whatsapp', null, ['class' => 'form-control']) !!}
</div>


<!-- W Menu Consultas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('w_menu_consultas', __('models/usuarios.fields.w_menu_consultas').':') !!}
    {!! Form::number('w_menu_consultas', null, ['class' => 'form-control']) !!}
</div>


<!-- W Menu Veiculos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('w_menu_veiculos', __('models/usuarios.fields.w_menu_veiculos').':') !!}
    {!! Form::number('w_menu_veiculos', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuarios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
