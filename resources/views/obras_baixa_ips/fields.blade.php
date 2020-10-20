<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/obrasBaixaIps.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idobras Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idobras', __('models/obrasBaixaIps.fields.idobras').':') !!}
    {!! Form::select('idobras', \App\Models\obras::orderBy('protocolo')->pluck('protocolo', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idra', __('models/obrasBaixaIps.fields.idra').':') !!}
    {!! Form::select('idra', \App\Models\ra::orderBy('ra_descricao')->pluck('ra_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idbairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idbairro', __('models/obrasBaixaIps.fields.idbairro').':') !!}
    {!! Form::select('idbairro', \App\Models\Bairros::orderBy('bairro_descricao')->pluck('bairro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idlogradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlogradouro', __('models/obrasBaixaIps.fields.idlogradouro').':') !!}
    {!! Form::select('idlogradouro', \App\Models\logradouro::orderBy('logradouro_descricao')->pluck('logradouro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idposte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idposte', __('models/obrasBaixaIps.fields.idposte').':') !!}
    {!! Form::select('idposte', \App\Models\poste::orderBy('poste_descricao')->pluck('poste_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_numero', __('models/obrasBaixaIps.fields.poste_numero').':') !!}
    {!! Form::text('poste_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Coordenada X Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordenada_x', __('models/obrasBaixaIps.fields.coordenada_x').':') !!}
    {!! Form::number('coordenada_x', null, ['class' => 'form-control']) !!}
</div>


<!-- Coordenada Y Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordenada_y', __('models/obrasBaixaIps.fields.coordenada_y').':') !!}
    {!! Form::number('coordenada_y', null, ['class' => 'form-control']) !!}
</div>


<!-- Visavis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visavis', __('models/obrasBaixaIps.fields.visavis').':') !!}
    {!! Form::number('visavis', null, ['class' => 'form-control']) !!}
</div>


<!-- Referencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencia', __('models/obrasBaixaIps.fields.referencia').':') !!}
    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Propriedade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_propriedade', __('models/obrasBaixaIps.fields.poste_propriedade').':') !!}
    {!! Form::text('poste_propriedade', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_status', __('models/obrasBaixaIps.fields.poste_status').':') !!}
    {!! Form::text('poste_status', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Data Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_data_instalacao', __('models/obrasBaixaIps.fields.poste_data_instalacao').':') !!}
    {!! Form::date('poste_data_instalacao', null, ['class' => 'form-control','id'=>'poste_data_instalacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#poste_data_instalacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idsuporte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsuporte', __('models/obrasBaixaIps.fields.idsuporte').':') !!}
    {!! Form::select('idsuporte', \App\Models\suporte::orderBy('suporte_descricao')->pluck('suporte_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Suporte Data Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('suporte_data_instalacao', __('models/obrasBaixaIps.fields.suporte_data_instalacao').':') !!}
    {!! Form::date('suporte_data_instalacao', null, ['class' => 'form-control','id'=>'suporte_data_instalacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#suporte_data_instalacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idluminaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idluminaria', __('models/obrasBaixaIps.fields.idluminaria').':') !!}
    {!! Form::select('idluminaria', \App\Models\luminaria::orderBy('luminaria_descricao')->pluck('luminaria_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Luminaria Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luminaria_numero', __('models/obrasBaixaIps.fields.luminaria_numero').':') !!}
    {!! Form::number('luminaria_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Fase Ligacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fase_ligacao', __('models/obrasBaixaIps.fields.fase_ligacao').':') !!}
    {!! Form::text('fase_ligacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Altura Montagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('altura_montagem', __('models/obrasBaixaIps.fields.altura_montagem').':') !!}
    {!! Form::number('altura_montagem', null, ['class' => 'form-control']) !!}
</div>


<!-- Luminaria Data Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luminaria_data_instalacao', __('models/obrasBaixaIps.fields.luminaria_data_instalacao').':') !!}
    {!! Form::date('luminaria_data_instalacao', null, ['class' => 'form-control','id'=>'luminaria_data_instalacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#luminaria_data_instalacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idlampada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlampada', __('models/obrasBaixaIps.fields.idlampada').':') !!}
    {!! Form::select('idlampada', \App\Models\lampada::orderBy('lampada_descricao')->pluck('lampada_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Quantidade Lampada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_lampada', __('models/obrasBaixaIps.fields.quantidade_lampada').':') !!}
    {!! Form::number('quantidade_lampada', null, ['class' => 'form-control']) !!}
</div>


<!-- Horas Ligada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horas_ligada', __('models/obrasBaixaIps.fields.horas_ligada').':') !!}
    {!! Form::number('horas_ligada', null, ['class' => 'form-control']) !!}
</div>


<!-- Lampada Data Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lampada_data_instalacao', __('models/obrasBaixaIps.fields.lampada_data_instalacao').':') !!}
    {!! Form::date('lampada_data_instalacao', null, ['class' => 'form-control','id'=>'lampada_data_instalacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#lampada_data_instalacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idreator Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idreator', __('models/obrasBaixaIps.fields.idreator').':') !!}
    {!! Form::select('idreator', \App\Models\reator::orderBy('reator_descricao')->pluck('reator_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Reator Data Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reator_data_instalacao', __('models/obrasBaixaIps.fields.reator_data_instalacao').':') !!}
    {!! Form::date('reator_data_instalacao', null, ['class' => 'form-control','id'=>'reator_data_instalacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#reator_data_instalacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idrele Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idrele', __('models/obrasBaixaIps.fields.idrele').':') !!}
    {!! Form::select('idrele', \App\Models\rele::orderBy('rele_descricao')->pluck('rele_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Rele Data Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rele_data_instalacao', __('models/obrasBaixaIps.fields.rele_data_instalacao').':') !!}
    {!! Form::date('rele_data_instalacao', null, ['class' => 'form-control','id'=>'rele_data_instalacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rele_data_instalacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idrede Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idrede', __('models/obrasBaixaIps.fields.idrede').':') !!}
    {!! Form::select('idrede', \App\Models\rede::orderBy('rede_descricao')->pluck('rede_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idtransformador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtransformador', __('models/obrasBaixaIps.fields.idtransformador').':') !!}
    {!! Form::select('idtransformador', \App\Models\transformador::orderBy('numero')->pluck('numero', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idmedidor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmedidor', __('models/obrasBaixaIps.fields.idmedidor').':') !!}
    {!! Form::select('idmedidor', \App\Models\medidor::orderBy('numero')->pluck('numero', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Medidor Data Instalacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medidor_data_instalacao', __('models/obrasBaixaIps.fields.medidor_data_instalacao').':') !!}
    {!! Form::date('medidor_data_instalacao', null, ['class' => 'form-control','id'=>'medidor_data_instalacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#medidor_data_instalacao').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idobjetoiluminado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idobjetoiluminado', __('models/obrasBaixaIps.fields.idobjetoiluminado').':') !!}
    {!! Form::select('idobjetoiluminado', \App\Models\objeto_iluminado::orderBy('objeto_iluminado_descricao')->pluck('objeto_iluminado_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idtarifa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtarifa', __('models/obrasBaixaIps.fields.idtarifa').':') !!}
    {!! Form::select('idtarifa', \App\Models\tarifa::orderBy('valor')->pluck('valor', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Observacoes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacoes', __('models/obrasBaixaIps.fields.observacoes').':') !!}
    {!! Form::text('observacoes', null, ['class' => 'form-control']) !!}
</div>


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/obrasBaixaIps.fields.situacao').':') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Atualizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_atualizado', __('models/obrasBaixaIps.fields.data_atualizado').':') !!}
    {!! Form::date('data_atualizado', null, ['class' => 'form-control','id'=>'data_atualizado']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_atualizado').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/obrasBaixaIps.fields.incluidoem').':') !!}
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


<!-- Idusuarioi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusuarioi', __('models/obrasBaixaIps.fields.idusuarioi').':') !!}
    {!! Form::select('idusuarioi', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idtiposolicitacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idtiposolicitacao', __('models/obrasBaixaIps.fields.idtiposolicitacao').':') !!}
    {!! Form::select('idtiposolicitacao', \App\Models\tipo_solicitacao::orderBy('tiposolicitacao_descricao')->pluck('tiposolicitacao_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_anterior', __('models/obrasBaixaIps.fields.poste_anterior').':') !!}
    {!! Form::text('poste_anterior', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Posterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_posterior', __('models/obrasBaixaIps.fields.poste_posterior').':') !!}
    {!! Form::text('poste_posterior', null, ['class' => 'form-control']) !!}
</div>


<!-- Idsuporte Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsuporte_anterior', __('models/obrasBaixaIps.fields.idsuporte_anterior').':') !!}
    {!! Form::select('idsuporte_anterior', \App\Models\suporte::orderBy('suporte_descricao')->pluck('suporte_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idluminaria Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idluminaria_anterior', __('models/obrasBaixaIps.fields.idluminaria_anterior').':') !!}
    {!! Form::select('idluminaria_anterior', \App\Models\luminaria::orderBy('luminaria_descricao')->pluck('luminaria_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idlampada Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlampada_anterior', __('models/obrasBaixaIps.fields.idlampada_anterior').':') !!}
    {!! Form::select('idlampada_anterior', \App\Models\lampada::orderBy('lampada_descricao')->pluck('lampada_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idlampada Anterior Quantidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idlampada_anterior_quantidade', __('models/obrasBaixaIps.fields.idlampada_anterior_quantidade').':') !!}
    {!! Form::number('idlampada_anterior_quantidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Idreator Anterior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idreator_anterior', __('models/obrasBaixaIps.fields.idreator_anterior').':') !!}
    {!! Form::select('idreator_anterior', \App\Models\reator::orderBy('reator_descricao')->pluck('reator_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Fabricante Luminaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fabricante_luminaria', __('models/obrasBaixaIps.fields.fabricante_luminaria').':') !!}
    {!! Form::text('fabricante_luminaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Modelo Luminaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_luminaria', __('models/obrasBaixaIps.fields.modelo_luminaria').':') !!}
    {!! Form::text('modelo_luminaria', null, ['class' => 'form-control']) !!}
</div>


<!-- Altura Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('altura_poste', __('models/obrasBaixaIps.fields.altura_poste').':') !!}
    {!! Form::text('altura_poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Modelo Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_poste', __('models/obrasBaixaIps.fields.modelo_poste').':') !!}
    {!! Form::text('modelo_poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Cor Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cor_poste', __('models/obrasBaixaIps.fields.cor_poste').':') !!}
    {!! Form::text('cor_poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Comprimento Braco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comprimento_braco', __('models/obrasBaixaIps.fields.comprimento_braco').':') !!}
    {!! Form::text('comprimento_braco', null, ['class' => 'form-control']) !!}
</div>


<!-- Propriedade Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('propriedade_poste', __('models/obrasBaixaIps.fields.propriedade_poste').':') !!}
    {!! Form::text('propriedade_poste', null, ['class' => 'form-control']) !!}
</div>


<!-- Telegestao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telegestao', __('models/obrasBaixaIps.fields.telegestao').':') !!}
    {!! Form::text('telegestao', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('obrasBaixaIps.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
