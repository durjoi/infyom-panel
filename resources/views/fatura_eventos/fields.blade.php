<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('models/faturaEventos.fields.numero').':') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', __('models/faturaEventos.fields.ano').':') !!}
    {!! Form::number('ano', null, ['class' => 'form-control']) !!}
</div>


<!-- Aberta Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aberta_em', __('models/faturaEventos.fields.aberta_em').':') !!}
    {!! Form::date('aberta_em', null, ['class' => 'form-control','id'=>'aberta_em']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#aberta_em').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Aberta Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aberta_idusuario', __('models/faturaEventos.fields.aberta_idusuario').':') !!}
    {!! Form::select('aberta_idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Encaminhada Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encaminhada_em', __('models/faturaEventos.fields.encaminhada_em').':') !!}
    {!! Form::date('encaminhada_em', null, ['class' => 'form-control','id'=>'encaminhada_em']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#encaminhada_em').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Encaminhada Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encaminhada_idusuario', __('models/faturaEventos.fields.encaminhada_idusuario').':') !!}
    {!! Form::select('encaminhada_idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Pago Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pago_em', __('models/faturaEventos.fields.pago_em').':') !!}
    {!! Form::date('pago_em', null, ['class' => 'form-control','id'=>'pago_em']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pago_em').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Pago Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pago_idusuario', __('models/faturaEventos.fields.pago_idusuario').':') !!}
    {!! Form::select('pago_idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_inicio', __('models/faturaEventos.fields.data_inicio').':') !!}
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
    {!! Form::label('data_termino', __('models/faturaEventos.fields.data_termino').':') !!}
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


<!-- Titulo Relatorio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_relatorio', __('models/faturaEventos.fields.titulo_relatorio').':') !!}
    {!! Form::text('titulo_relatorio', null, ['class' => 'form-control']) !!}
</div>


<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', __('models/faturaEventos.fields.id_cidade').':') !!}
    {!! Form::select('id_cidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Meses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_meses', __('models/faturaEventos.fields.id_meses').':') !!}
    {!! Form::select('id_meses', \App\Models\meses::orderBy('id')->pluck('mes', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Id Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empresa', __('models/faturaEventos.fields.id_empresa').':') !!}
    {!! Form::select('id_empresa', \App\Models\Empresas::orderBy('empresa_nome')->pluck('empresa_nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faturaEventos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
