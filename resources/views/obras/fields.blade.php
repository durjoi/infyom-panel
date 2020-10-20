<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/obras.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Protocolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('protocolo', __('models/obras.fields.protocolo').':') !!}
    {!! Form::text('protocolo', null, ['class' => 'form-control']) !!}
</div>


<!-- Numero Processo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_processo', __('models/obras.fields.numero_processo').':') !!}
    {!! Form::text('numero_processo', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Processo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_processo', __('models/obras.fields.data_processo').':') !!}
    {!! Form::date('data_processo', null, ['class' => 'form-control','id'=>'data_processo']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_processo').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idtiposolicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtiposolicitante', __('models/obras.fields.idtiposolicitante').':') !!}
    {!! Form::select('idtiposolicitante', \App\Models\tipo_solicitante::orderBy('tiposolicitante_descricao')->pluck('tiposolicitante_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idtiposolicitacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtiposolicitacao', __('models/obras.fields.idtiposolicitacao').':') !!}
    {!! Form::select('idtiposolicitacao', \App\Models\tipo_solicitacao::orderBy('tiposolicitacao_descricao')->pluck('tiposolicitacao_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Solicitante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitante', __('models/obras.fields.solicitante').':') !!}
    {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefones', __('models/obras.fields.telefones').':') !!}
    {!! Form::text('telefones', null, ['class' => 'form-control']) !!}
</div>


<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/obras.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>


<!-- Idra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idra', __('models/obras.fields.idra').':') !!}
    {!! Form::select('idra', \App\Models\ra::orderBy('ra_descricao')->pluck('ra_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idlogradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlogradouro', __('models/obras.fields.idlogradouro').':') !!}
    {!! Form::select('idlogradouro', \App\Models\logradouro::orderBy('logradouro_descricao')->pluck('logradouro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idbairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idbairro', __('models/obras.fields.idbairro').':') !!}
    {!! Form::select('idbairro', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idtipoacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtipoacao', __('models/obras.fields.idtipoacao').':') !!}
    {!! Form::select('idtipoacao', \App\Models\tipoacao::orderBy('tipoacao_descricao')->pluck('tipoacao_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Servico Solicitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servico_solicitado', __('models/obras.fields.servico_solicitado').':') !!}
    {!! Form::text('servico_solicitado', null, ['class' => 'form-control']) !!}
</div>


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/obras.fields.situacao').':') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/obras.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/obras.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Impressao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_impressao', __('models/obras.fields.enviado_impressao').':') !!}
    {!! Form::number('enviado_impressao', null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_mobile', __('models/obras.fields.enviado_mobile').':') !!}
    {!! Form::number('enviado_mobile', null, ['class' => 'form-control']) !!}
</div>


<!-- Enviado Mobile Idturma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviado_mobile_idturma', __('models/obras.fields.enviado_mobile_idturma').':') !!}
    {!! Form::select('enviado_mobile_idturma', \App\Models\turma::orderBy('cabo_turma')->pluck('cabo_turma', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencia', __('models/obras.fields.referencia').':') !!}
    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao', __('models/obras.fields.observacao').':') !!}
    {!! Form::text('observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Telefone Contato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone_contato', __('models/obras.fields.telefone_contato').':') !!}
    {!! Form::text('telefone_contato', null, ['class' => 'form-control']) !!}
</div>


<!-- Idempresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idempresa', __('models/obras.fields.idempresa').':') !!}
    {!! Form::select('idempresa', \App\Models\Empresas::orderBy('empresa_nome')->pluck('empresa_nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Data Prevista Inicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_prevista_inicial', __('models/obras.fields.data_prevista_inicial').':') !!}
    {!! Form::date('data_prevista_inicial', null, ['class' => 'form-control','id'=>'data_prevista_inicial']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_prevista_inicial').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Data Prevista Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_prevista_final', __('models/obras.fields.data_prevista_final').':') !!}
    {!! Form::date('data_prevista_final', null, ['class' => 'form-control','id'=>'data_prevista_final']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_prevista_final').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Fiscal Prefeitura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fiscal_prefeitura', __('models/obras.fields.fiscal_prefeitura').':') !!}
    {!! Form::text('fiscal_prefeitura', null, ['class' => 'form-control']) !!}
</div>


<!-- Art Obra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('art_obra', __('models/obras.fields.art_obra').':') !!}
    {!! Form::text('art_obra', null, ['class' => 'form-control']) !!}
</div>


<!-- C Informar Ciencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_informar_ciencia', __('models/obras.fields.c_informar_ciencia').':') !!}
    {!! Form::number('c_informar_ciencia', null, ['class' => 'form-control']) !!}
</div>


<!-- C Informar Concluida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('c_informar_concluida', __('models/obras.fields.c_informar_concluida').':') !!}
    {!! Form::number('c_informar_concluida', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Execucao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_execucao', __('models/obras.fields.data_execucao').':') !!}
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
    {!! Form::label('hora_execucao', __('models/obras.fields.hora_execucao').':') !!}
    {!! Form::text('hora_execucao', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Baixa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_baixa', __('models/obras.fields.data_baixa').':') !!}
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
    {!! Form::label('hora_baixa', __('models/obras.fields.hora_baixa').':') !!}
    {!! Form::text('hora_baixa', null, ['class' => 'form-control']) !!}
</div>


<!-- Idturma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idturma', __('models/obras.fields.idturma').':') !!}
    {!! Form::select('idturma', \App\Models\turma::orderBy('cabo_turma')->pluck('cabo_turma', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Alterador Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alterador_em', __('models/obras.fields.alterador_em').':') !!}
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
    {!! Form::label('idusuarioalterou', __('models/obras.fields.idusuarioalterou').':') !!}
    {!! Form::select('idusuarioalterou', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Logradouro Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro_descricao', __('models/obras.fields.logradouro_descricao').':') !!}
    {!! Form::text('logradouro_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacao Fatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacao_fatura', __('models/obras.fields.observacao_fatura').':') !!}
    {!! Form::text('observacao_fatura', null, ['class' => 'form-control']) !!}
</div>


<!-- Complemento Turma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento_turma', __('models/obras.fields.complemento_turma').':') !!}
    {!! Form::text('complemento_turma', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('obras.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
