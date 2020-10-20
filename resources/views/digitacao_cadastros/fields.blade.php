<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', __('models/digitacaoCadastros.fields.cidade').':') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>


<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', __('models/digitacaoCadastros.fields.bairro').':') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>


<!-- Lograduro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lograduro', __('models/digitacaoCadastros.fields.lograduro').':') !!}
    {!! Form::text('lograduro', null, ['class' => 'form-control']) !!}
</div>


<!-- Visavis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visavis', __('models/digitacaoCadastros.fields.visavis').':') !!}
    {!! Form::number('visavis', null, ['class' => 'form-control']) !!}
</div>


<!-- Referncia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referncia', __('models/digitacaoCadastros.fields.referncia').':') !!}
    {!! Form::text('referncia', null, ['class' => 'form-control']) !!}
</div>


<!-- Transformador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transformador', __('models/digitacaoCadastros.fields.transformador').':') !!}
    {!! Form::text('transformador', null, ['class' => 'form-control']) !!}
</div>


<!-- Medidor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medidor', __('models/digitacaoCadastros.fields.medidor').':') !!}
    {!! Form::text('medidor', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_numero', __('models/digitacaoCadastros.fields.poste_numero').':') !!}
    {!! Form::text('poste_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Luminaria Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luminaria_numero', __('models/digitacaoCadastros.fields.luminaria_numero').':') !!}
    {!! Form::number('luminaria_numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Coordenada X Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordenada_x', __('models/digitacaoCadastros.fields.coordenada_x').':') !!}
    {!! Form::text('coordenada_x', null, ['class' => 'form-control']) !!}
</div>


<!-- Coordenada Y Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordenada_y', __('models/digitacaoCadastros.fields.coordenada_y').':') !!}
    {!! Form::text('coordenada_y', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Propriedade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_propriedade', __('models/digitacaoCadastros.fields.poste_propriedade').':') !!}
    {!! Form::text('poste_propriedade', null, ['class' => 'form-control']) !!}
</div>


<!-- Poste Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poste_status', __('models/digitacaoCadastros.fields.poste_status').':') !!}
    {!! Form::text('poste_status', null, ['class' => 'form-control']) !!}
</div>


<!-- Fase Ligacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fase_ligacao', __('models/digitacaoCadastros.fields.fase_ligacao').':') !!}
    {!! Form::text('fase_ligacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Luminaria Propriedade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luminaria_propriedade', __('models/digitacaoCadastros.fields.luminaria_propriedade').':') !!}
    {!! Form::text('luminaria_propriedade', null, ['class' => 'form-control']) !!}
</div>


<!-- Luminaria Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luminaria_estado', __('models/digitacaoCadastros.fields.luminaria_estado').':') !!}
    {!! Form::text('luminaria_estado', null, ['class' => 'form-control']) !!}
</div>


<!-- Quantidade Lampada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_lampada', __('models/digitacaoCadastros.fields.quantidade_lampada').':') !!}
    {!! Form::number('quantidade_lampada', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacoes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacoes', __('models/digitacaoCadastros.fields.observacoes').':') !!}
    {!! Form::text('observacoes', null, ['class' => 'form-control']) !!}
</div>


<!-- Data Cadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_cadastro', __('models/digitacaoCadastros.fields.data_cadastro').':') !!}
    {!! Form::date('data_cadastro', null, ['class' => 'form-control','id'=>'data_cadastro']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_cadastro').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Cadastrador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cadastrador', __('models/digitacaoCadastros.fields.cadastrador').':') !!}
    {!! Form::text('cadastrador', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidodoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidodoem', __('models/digitacaoCadastros.fields.incluidodoem').':') !!}
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


<!-- Idra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idra', __('models/digitacaoCadastros.fields.idra').':') !!}
    {!! Form::select('idra', \App\Models\ra::orderBy('ra_descricao')->pluck('ra_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Logradouro Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_logradouro_tipo', __('models/digitacaoCadastros.fields.id_logradouro_tipo').':') !!}
    {!! Form::select('id_logradouro_tipo', \App\Models\logradouro_tipo::orderBy('logradouro_descricao')->pluck('logradouro_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Rede Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_rede', __('models/digitacaoCadastros.fields.id_rede').':') !!}
    {!! Form::select('id_rede', \App\Models\rede::orderBy('rede_descricao')->pluck('rede_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Poste Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_poste', __('models/digitacaoCadastros.fields.id_poste').':') !!}
    {!! Form::select('id_poste', \App\Models\poste::orderBy('poste_descricao')->pluck('poste_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Lampada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_lampada', __('models/digitacaoCadastros.fields.id_lampada').':') !!}
    {!! Form::select('id_lampada', \App\Models\lampada::orderBy('lampada_descricao')->pluck('lampada_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Rele Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_rele', __('models/digitacaoCadastros.fields.id_rele').':') !!}
    {!! Form::select('id_rele', \App\Models\rele::orderBy('rele_descricao')->pluck('rele_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Reator Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_reator', __('models/digitacaoCadastros.fields.id_reator').':') !!}
    {!! Form::select('id_reator', \App\Models\reator::orderBy('reator_descricao')->pluck('reator_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Objeto Iluminado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_objeto_iluminado', __('models/digitacaoCadastros.fields.id_objeto_iluminado').':') !!}
    {!! Form::select('id_objeto_iluminado', \App\Models\objeto_iluminado::orderBy('objeto_iluminado_descricao')->pluck('objeto_iluminado_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', __('models/digitacaoCadastros.fields.id_usuario').':') !!}
    {!! Form::select('id_usuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('digitacaoCadastros.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
