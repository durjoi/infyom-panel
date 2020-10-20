<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/faturaObras.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idempresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idempresa', __('models/faturaObras.fields.idempresa').':') !!}
    {!! Form::select('idempresa', \App\Models\Empresas::orderBy('empresa_nome')->pluck('empresa_nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', __('models/faturaObras.fields.numero').':') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>


<!-- Idmeses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmeses', __('models/faturaObras.fields.idmeses').':') !!}
    {!! Form::select('idmeses', \App\Models\meses::orderBy('id')->pluck('mes', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', __('models/faturaObras.fields.ano').':') !!}
    {!! Form::number('ano', null, ['class' => 'form-control']) !!}
</div>


<!-- Situacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao', __('models/faturaObras.fields.situacao').':') !!}
    {!! Form::text('situacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Aberta Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aberta_em', __('models/faturaObras.fields.aberta_em').':') !!}
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
    {!! Form::label('aberta_idusuario', __('models/faturaObras.fields.aberta_idusuario').':') !!}
    {!! Form::select('aberta_idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Encaminhada Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encaminhada_em', __('models/faturaObras.fields.encaminhada_em').':') !!}
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
    {!! Form::label('encaminhada_idusuario', __('models/faturaObras.fields.encaminhada_idusuario').':') !!}
    {!! Form::select('encaminhada_idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Pago Em Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pago_em', __('models/faturaObras.fields.pago_em').':') !!}
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
    {!! Form::label('pago_idusuario', __('models/faturaObras.fields.pago_idusuario').':') !!}
    {!! Form::select('pago_idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_inicio', __('models/faturaObras.fields.data_inicio').':') !!}
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
    {!! Form::label('data_termino', __('models/faturaObras.fields.data_termino').':') !!}
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
    {!! Form::label('titulo_relatorio', __('models/faturaObras.fields.titulo_relatorio').':') !!}
    {!! Form::text('titulo_relatorio', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faturaObras.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
