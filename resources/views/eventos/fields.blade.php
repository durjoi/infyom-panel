<!-- Protocolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('protocolo', __('models/eventos.fields.protocolo').':') !!}
    {!! Form::text('protocolo', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Solicitacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_solicitacao', __('models/eventos.fields.data_solicitacao').':') !!}
    {!! Form::date('data_solicitacao', null, ['class' => 'form-control','id'=>'data_solicitacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_solicitacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante', __('models/eventos.fields.solicitante').':') !!}
    {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefones', __('models/eventos.fields.telefones').':') !!}
    {!! Form::text('telefones', null, ['class' => 'form-control']) !!}
</div>


<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/eventos.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Comumento Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comumento_numero', __('models/eventos.fields.comumento_numero').':') !!}
    {!! Form::text('comumento_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Documento Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('documento_tipo', __('models/eventos.fields.documento_tipo').':') !!}
    {!! Form::text('documento_tipo', null, ['class' => 'form-control']) !!}
</div>


<!-- Evento Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('evento_descricao', __('models/eventos.fields.evento_descricao').':') !!}
    {!! Form::text('evento_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_inicio', __('models/eventos.fields.data_inicio').':') !!}
    {!! Form::date('data_inicio', null, ['class' => 'form-control','id'=>'data_inicio']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_inicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Data Termino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_termino', __('models/eventos.fields.data_termino').':') !!}
    {!! Form::date('data_termino', null, ['class' => 'form-control','id'=>'data_termino']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_termino').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Quantidade Dias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_dias', __('models/eventos.fields.quantidade_dias').':') !!}
    {!! Form::number('quantidade_dias', null, ['class' => 'form-control']) !!}
</div>


<!-- Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencia', __('models/eventos.fields.referencia').':') !!}
    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
</div>


<!-- Responsavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsavel', __('models/eventos.fields.responsavel').':') !!}
    {!! Form::text('responsavel', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefones Responsavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefones_responsavel', __('models/eventos.fields.telefones_responsavel').':') !!}
    {!! Form::text('telefones_responsavel', null, ['class' => 'form-control']) !!}
</div>


<!-- Email Responsavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_responsavel', __('models/eventos.fields.email_responsavel').':') !!}
    {!! Form::text('email_responsavel', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao', __('models/eventos.fields.observacao').':') !!}
    {!! Form::text('observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/eventos.fields.situacao').':') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Impressao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_impressao', __('models/eventos.fields.enviado_impressao').':') !!}
    {!! Form::text('enviado_impressao', null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_mobile', __('models/eventos.fields.enviado_mobile').':') !!}
    {!! Form::text('enviado_mobile', null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Mobile Id Turma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_mobile_id_turma', __('models/eventos.fields.enviado_mobile_id_turma').':') !!}
    {!! Form::select('enviado_mobile_id_turma', \App\Models\turma::orderBy('cabo_turma')->pluck('cabo_turma', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- C Informar Ciencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_informar_ciencia', __('models/eventos.fields.c_informar_ciencia').':') !!}
    {!! Form::text('c_informar_ciencia', null, ['class' => 'form-control']) !!}
</div>


<!-- C Informar Concluida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_informar_concluida', __('models/eventos.fields.c_informar_concluida').':') !!}
    {!! Form::text('c_informar_concluida', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Conclusao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_conclusao', __('models/eventos.fields.data_conclusao').':') !!}
    {!! Form::date('data_conclusao', null, ['class' => 'form-control','id'=>'data_conclusao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_conclusao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Data Baixa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_baixa', __('models/eventos.fields.data_baixa').':') !!}
    {!! Form::date('data_baixa', null, ['class' => 'form-control','id'=>'data_baixa']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_baixa').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Dados Conclusivos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dados_conclusivos', __('models/eventos.fields.dados_conclusivos').':') !!}
    {!! Form::text('dados_conclusivos', null, ['class' => 'form-control']) !!}
</div>


<!-- Alterador Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alterador_em', __('models/eventos.fields.alterador_em').':') !!}
    {!! Form::date('alterador_em', null, ['class' => 'form-control','id'=>'alterador_em']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#alterador_em').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Logradouro Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_descricao', __('models/eventos.fields.logradouro_descricao').':') !!}
    {!! Form::text('logradouro_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_evento', __('models/eventos.fields.tipo_evento').':') !!}
    {!! Form::text('tipo_evento', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/eventos.fields.incluidodoem').':') !!}
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


<!-- Id Tipo Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_solicitante', __('models/eventos.fields.id_tipo_solicitante').':') !!}
    {!! Form::select('id_tipo_solicitante', \App\Models\tipo_solicitante::orderBy('tiposolicitante_descricao')->pluck('tiposolicitante_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Tipo Solicitacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_solicitacao', __('models/eventos.fields.id_tipo_solicitacao').':') !!}
    {!! Form::select('id_tipo_solicitacao', \App\Models\tipo_solicitacao::orderBy('tiposolicitacao_descricao')->pluck('tiposolicitacao_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_logradouro', __('models/eventos.fields.id_logradouro').':') !!}
    {!! Form::select('id_logradouro', \App\Models\logradouro::orderBy('logradouro_descricao')->pluck('logradouro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_bairro', __('models/eventos.fields.id_bairro').':') !!}
    {!! Form::select('id_bairro', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empresa', __('models/eventos.fields.id_empresa').':') !!}
    {!! Form::select('id_empresa', \App\Models\Empresas::orderBy('empresa_nome')->pluck('empresa_nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Turma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_turma', __('models/eventos.fields.id_turma').':') !!}
    {!! Form::select('id_turma', \App\Models\turma::orderBy('cabo_turma')->pluck('cabo_turma', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/eventos.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/eventos.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('eventos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
