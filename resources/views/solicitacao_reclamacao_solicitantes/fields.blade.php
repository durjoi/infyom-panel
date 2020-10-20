<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/solicitacaoReclamacaoSolicitantes.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idsolicitacaoreclamacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsolicitacaoreclamacao', __('models/solicitacaoReclamacaoSolicitantes.fields.idsolicitacaoreclamacao').':') !!}
    {!! Form::select('idsolicitacaoreclamacao', \App\Models\solicitacao_reclamacao::orderBy('id')->pluck('id', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', __('models/solicitacaoReclamacaoSolicitantes.fields.nome').':') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', __('models/solicitacaoReclamacaoSolicitantes.fields.telefone').':') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>


<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/solicitacaoReclamacaoSolicitantes.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/solicitacaoReclamacaoSolicitantes.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/solicitacaoReclamacaoSolicitantes.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('solicitacaoReclamacaoSolicitantes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
