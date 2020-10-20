<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/solicitacaoReclamacaos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Protocolo Sistema Field -->
<div class="form-group col-sm-6">
    {!! Form::label('protocolo_sistema', __('models/solicitacaoReclamacaos.fields.protocolo_sistema').':') !!}
    {!! Form::text('protocolo_sistema', null, ['class' => 'form-control']) !!}
</div>


<!-- Protocolo Falasalvador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('protocolo_falasalvador', __('models/solicitacaoReclamacaos.fields.protocolo_falasalvador').':') !!}
    {!! Form::text('protocolo_falasalvador', null, ['class' => 'form-control']) !!}
</div>


<!-- Protocolo Consorcio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('protocolo_consorcio', __('models/solicitacaoReclamacaos.fields.protocolo_consorcio').':') !!}
    {!! Form::text('protocolo_consorcio', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Atendimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_atendimento', __('models/solicitacaoReclamacaos.fields.data_atendimento').':') !!}
    {!! Form::date('data_atendimento', null, ['class' => 'form-control','id'=>'data_atendimento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_atendimento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Hora Atendimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_atendimento', __('models/solicitacaoReclamacaos.fields.hora_atendimento').':') !!}
    {!! Form::text('hora_atendimento', null, ['class' => 'form-control']) !!}
</div>


<!-- Horaregistro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horaregistro', __('models/solicitacaoReclamacaos.fields.horaregistro').':') !!}
    {!! Form::text('horaregistro', null, ['class' => 'form-control']) !!}
</div>


<!-- Temporegistro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temporegistro', __('models/solicitacaoReclamacaos.fields.temporegistro').':') !!}
    {!! Form::text('temporegistro', null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante_nome', __('models/solicitacaoReclamacaos.fields.solicitante_nome').':') !!}
    {!! Form::text('solicitante_nome', null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante_telefone', __('models/solicitacaoReclamacaos.fields.solicitante_telefone').':') !!}
    {!! Form::text('solicitante_telefone', null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante_email', __('models/solicitacaoReclamacaos.fields.solicitante_email').':') !!}
    {!! Form::text('solicitante_email', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_numero', __('models/solicitacaoReclamacaos.fields.poste_numero').':') !!}
    {!! Form::text('poste_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Luminaria Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luminaria_numero', __('models/solicitacaoReclamacaos.fields.luminaria_numero').':') !!}
    {!! Form::number('luminaria_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Idtiposolicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtiposolicitante', __('models/solicitacaoReclamacaos.fields.idtiposolicitante').':') !!}
    {!! Form::select('idtiposolicitante', \App\Models\tipo_solicitante::orderBy('tiposolicitante_descricao')->pluck('tiposolicitante_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idtiposolicitacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtiposolicitacao', __('models/solicitacaoReclamacaos.fields.idtiposolicitacao').':') !!}
    {!! Form::select('idtiposolicitacao', \App\Models\tipo_solicitacao::orderBy('tiposolicitacao_descricao')->pluck('tiposolicitacao_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idlogradouro Cadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlogradouro_cadastro', __('models/solicitacaoReclamacaos.fields.idlogradouro_cadastro').':') !!}
    {!! Form::select('idlogradouro_cadastro', \App\Models\logradouro::orderBy('logradouro_descricao')->pluck('logradouro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idbairro Cadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idbairro_cadastro', __('models/solicitacaoReclamacaos.fields.idbairro_cadastro').':') !!}
    {!! Form::select('idbairro_cadastro', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Visavis Cadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visavis_cadastro', __('models/solicitacaoReclamacaos.fields.visavis_cadastro').':') !!}
    {!! Form::text('visavis_cadastro', null, ['class' => 'form-control']) !!}
</div>


<!-- Referencia Cadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencia_cadastro', __('models/solicitacaoReclamacaos.fields.referencia_cadastro').':') !!}
    {!! Form::text('referencia_cadastro', null, ['class' => 'form-control']) !!}
</div>


<!-- Idlogradourotipo Informado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlogradourotipo_informado', __('models/solicitacaoReclamacaos.fields.idlogradourotipo_informado').':') !!}
    {!! Form::select('idlogradourotipo_informado', \App\Models\logradouro_tipo::orderBy('logradouro_tipo_descricao')->pluck('logradouro_tipo_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Descricao Informado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_descricao_informado', __('models/solicitacaoReclamacaos.fields.logradouro_descricao_informado').':') !!}
    {!! Form::text('logradouro_descricao_informado', null, ['class' => 'form-control']) !!}
</div>


<!-- Idbairro Informado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idbairro_informado', __('models/solicitacaoReclamacaos.fields.idbairro_informado').':') !!}
    {!! Form::select('idbairro_informado', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Visavis Informado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visavis_informado', __('models/solicitacaoReclamacaos.fields.visavis_informado').':') !!}
    {!! Form::text('visavis_informado', null, ['class' => 'form-control']) !!}
</div>


<!-- Referencia Informado Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('referencia_informado', __('models/solicitacaoReclamacaos.fields.referencia_informado').':') !!}
    {!! Form::textarea('referencia_informado', null, ['class' => 'form-control']) !!}
</div>


<!-- Dadoscomplementares Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('dadoscomplementares', __('models/solicitacaoReclamacaos.fields.dadoscomplementares').':') !!}
    {!! Form::textarea('dadoscomplementares', null, ['class' => 'form-control']) !!}
</div>


<!-- Servicosolicitado Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('servicosolicitado', __('models/solicitacaoReclamacaos.fields.servicosolicitado').':') !!}
    {!! Form::textarea('servicosolicitado', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/solicitacaoReclamacaos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/solicitacaoReclamacaos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idempresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idempresa', __('models/solicitacaoReclamacaos.fields.idempresa').':') !!}
    {!! Form::select('idempresa', \App\Models\Empresas::orderBy('empresa_nome')->pluck('empresa_nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Impressao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_impressao', __('models/solicitacaoReclamacaos.fields.enviado_impressao').':') !!}
    {!! Form::number('enviado_impressao', null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_mobile', __('models/solicitacaoReclamacaos.fields.enviado_mobile').':') !!}
    {!! Form::number('enviado_mobile', null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Mobile Idturma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_mobile_idturma', __('models/solicitacaoReclamacaos.fields.enviado_mobile_idturma').':') !!}
    {!! Form::select('enviado_mobile_idturma', \App\Models\turma::orderBy('cabo_turma')->pluck('cabo_turma', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Data Execucao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_execucao', __('models/solicitacaoReclamacaos.fields.data_execucao').':') !!}
    {!! Form::date('data_execucao', null, ['class' => 'form-control','id'=>'data_execucao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_execucao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Hora Execucao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_execucao', __('models/solicitacaoReclamacaos.fields.hora_execucao').':') !!}
    {!! Form::text('hora_execucao', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Baixa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_baixa', __('models/solicitacaoReclamacaos.fields.data_baixa').':') !!}
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


<!-- Hora Baixa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_baixa', __('models/solicitacaoReclamacaos.fields.hora_baixa').':') !!}
    {!! Form::text('hora_baixa', null, ['class' => 'form-control']) !!}
</div>


<!-- Acao Adotada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acao_adotada', __('models/solicitacaoReclamacaos.fields.acao_adotada').':') !!}
    {!! Form::text('acao_adotada', null, ['class' => 'form-control']) !!}
</div>


<!-- Servico Realizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servico_realizado', __('models/solicitacaoReclamacaos.fields.servico_realizado').':') !!}
    {!! Form::text('servico_realizado', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Numero Executado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_numero_executado', __('models/solicitacaoReclamacaos.fields.poste_numero_executado').':') !!}
    {!! Form::text('poste_numero_executado', null, ['class' => 'form-control']) !!}
</div>


<!-- Luminaria Numero Executado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luminaria_numero_executado', __('models/solicitacaoReclamacaos.fields.luminaria_numero_executado').':') !!}
    {!! Form::number('luminaria_numero_executado', null, ['class' => 'form-control']) !!}
</div>


<!-- Iddefeitoencontrado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iddefeitoencontrado', __('models/solicitacaoReclamacaos.fields.iddefeitoencontrado').':') !!}
    {!! Form::select('iddefeitoencontrado', \App\Models\Defeitos_encontrados::orderBy('defeito_encontrato_descricao')->pluck('defeito_encontrato_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idcausadefeito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcausadefeito', __('models/solicitacaoReclamacaos.fields.idcausadefeito').':') !!}
    {!! Form::select('idcausadefeito', \App\Models\Causa_defeitos::orderBy('causa_defeito_descricao')->pluck('causa_defeito_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idturma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idturma', __('models/solicitacaoReclamacaos.fields.idturma').':') !!}
    {!! Form::select('idturma', \App\Models\turma::orderBy('cabo_turma')->pluck('cabo_turma', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Alterador Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alterador_em', __('models/solicitacaoReclamacaos.fields.alterador_em').':') !!}
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


<!-- Idusuarioalterou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuarioalterou', __('models/solicitacaoReclamacaos.fields.idusuarioalterou').':') !!}
    {!! Form::select('idusuarioalterou', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Sfs Informar Ciencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sfs_informar_ciencia', __('models/solicitacaoReclamacaos.fields.sfs_informar_ciencia').':') !!}
    {!! Form::number('sfs_informar_ciencia', null, ['class' => 'form-control']) !!}
</div>


<!-- C Informar Ciencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_informar_ciencia', __('models/solicitacaoReclamacaos.fields.c_informar_ciencia').':') !!}
    {!! Form::number('c_informar_ciencia', null, ['class' => 'form-control']) !!}
</div>


<!-- C Informar Concluida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_informar_concluida', __('models/solicitacaoReclamacaos.fields.c_informar_concluida').':') !!}
    {!! Form::number('c_informar_concluida', null, ['class' => 'form-control']) !!}
</div>


<!-- Sfs Informar Concluida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sfs_informar_concluida', __('models/solicitacaoReclamacaos.fields.sfs_informar_concluida').':') !!}
    {!! Form::number('sfs_informar_concluida', null, ['class' => 'form-control']) !!}
</div>


<!-- Idfatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfatura', __('models/solicitacaoReclamacaos.fields.idfatura').':') !!}
    {!! Form::text('idfatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Tma Dias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tma_dias', __('models/solicitacaoReclamacaos.fields.tma_dias').':') !!}
    {!! Form::number('tma_dias', null, ['class' => 'form-control']) !!}
</div>


<!-- Tma Horas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tma_horas', __('models/solicitacaoReclamacaos.fields.tma_horas').':') !!}
    {!! Form::number('tma_horas', null, ['class' => 'form-control']) !!}
</div>


<!-- Referencia Poste Executado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencia_poste_executado', __('models/solicitacaoReclamacaos.fields.referencia_poste_executado').':') !!}
    {!! Form::text('referencia_poste_executado', null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Acao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_acao', __('models/solicitacaoReclamacaos.fields.tipo_acao').':') !!}
    {!! Form::text('tipo_acao', null, ['class' => 'form-control']) !!}
</div>


<!-- Motivo Acao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('motivo_acao', __('models/solicitacaoReclamacaos.fields.motivo_acao').':') !!}
    {!! Form::textarea('motivo_acao', null, ['class' => 'form-control']) !!}
</div>


<!-- Garantia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('garantia', __('models/solicitacaoReclamacaos.fields.garantia').':') !!}
    {!! Form::number('garantia', null, ['class' => 'form-control']) !!}
</div>


<!-- Garantia Os Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('garantia_os_anterior', __('models/solicitacaoReclamacaos.fields.garantia_os_anterior').':') !!}
    {!! Form::text('garantia_os_anterior', null, ['class' => 'form-control']) !!}
</div>


<!-- Supervisor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor', __('models/solicitacaoReclamacaos.fields.supervisor').':') !!}
    {!! Form::text('supervisor', null, ['class' => 'form-control']) !!}
</div>


<!-- Motivo Atraso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivo_atraso', __('models/solicitacaoReclamacaos.fields.motivo_atraso').':') !!}
    {!! Form::text('motivo_atraso', null, ['class' => 'form-control']) !!}
</div>


<!-- App Coordenada X Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app_coordenada_x', __('models/solicitacaoReclamacaos.fields.app_coordenada_x').':') !!}
    {!! Form::text('app_coordenada_x', null, ['class' => 'form-control']) !!}
</div>


<!-- App Coordenada Y Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app_coordenada_y', __('models/solicitacaoReclamacaos.fields.app_coordenada_y').':') !!}
    {!! Form::text('app_coordenada_y', null, ['class' => 'form-control']) !!}
</div>


<!-- App Informacoes Gerais Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('app_informacoes_gerais', __('models/solicitacaoReclamacaos.fields.app_informacoes_gerais').':') !!}
    {!! Form::textarea('app_informacoes_gerais', null, ['class' => 'form-control']) !!}
</div>


<!-- Controle Idturma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('controle_idturma', __('models/solicitacaoReclamacaos.fields.controle_idturma').':') !!}
    {!! Form::select('controle_idturma', \App\Models\turma::orderBy('cabo_turma')->pluck('cabo_turma', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Controle Data Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('controle_data_entrega', __('models/solicitacaoReclamacaos.fields.controle_data_entrega').':') !!}
    {!! Form::date('controle_data_entrega', null, ['class' => 'form-control','id'=>'controle_data_entrega']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#controle_data_entrega').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Controle Data Recebido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('controle_data_recebido', __('models/solicitacaoReclamacaos.fields.controle_data_recebido').':') !!}
    {!! Form::date('controle_data_recebido', null, ['class' => 'form-control','id'=>'controle_data_recebido']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#controle_data_recebido').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Controle Acao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('controle_acao', __('models/solicitacaoReclamacaos.fields.controle_acao').':') !!}
    {!! Form::text('controle_acao', null, ['class' => 'form-control']) !!}
</div>


<!-- Controle Idmotivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('controle_idmotivo', __('models/solicitacaoReclamacaos.fields.controle_idmotivo').':') !!}
    {!! Form::select('controle_idmotivo', \App\Models\Controle_motivos::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Impressoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('impressoem', __('models/solicitacaoReclamacaos.fields.impressoem').':') !!}
    {!! Form::date('impressoem', null, ['class' => 'form-control','id'=>'impressoem']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#impressoem').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Impressopor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('impressopor', __('models/solicitacaoReclamacaos.fields.impressopor').':') !!}
    {!! Form::number('impressopor', null, ['class' => 'form-control']) !!}
</div>


<!-- Os Separada Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('os_separada_em', __('models/solicitacaoReclamacaos.fields.os_separada_em').':') !!}
    {!! Form::date('os_separada_em', null, ['class' => 'form-control','id'=>'os_separada_em']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#os_separada_em').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Os Separada Por Field -->
<div class="form-group col-sm-6">
    {!! Form::label('os_separada_por', __('models/solicitacaoReclamacaos.fields.os_separada_por').':') !!}
    {!! Form::number('os_separada_por', null, ['class' => 'form-control']) !!}
</div>


<!-- Os Separada Para Field -->
<div class="form-group col-sm-6">
    {!! Form::label('os_separada_para', __('models/solicitacaoReclamacaos.fields.os_separada_para').':') !!}
    {!! Form::number('os_separada_para', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('solicitacaoReclamacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
