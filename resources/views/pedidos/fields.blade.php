<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/pedidos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idpedidocabecalho Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpedidocabecalho', __('models/pedidos.fields.idpedidocabecalho').':') !!}
    {!! Form::select('idpedidocabecalho', \App\Models\pedido_cabecalho::orderBy('id')->pluck('id', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Data Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_pedido', __('models/pedidos.fields.data_pedido').':') !!}
    {!! Form::date('data_pedido', null, ['class' => 'form-control','id'=>'data_pedido']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#data_pedido').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Idobrasestoque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idobrasestoque', __('models/pedidos.fields.idobrasestoque').':') !!}
    {!! Form::select('idobrasestoque', \App\Models\obras_estoque::orderBy('obras_estoque_descricao')->pluck('obras_estoque_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Pedido Encaminhado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_encaminhado', __('models/pedidos.fields.pedido_encaminhado').':') !!}
    {!! Form::number('pedido_encaminhado', null, ['class' => 'form-control']) !!}
</div>


<!-- Pedido Encaminhado Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_encaminhado_data', __('models/pedidos.fields.pedido_encaminhado_data').':') !!}
    {!! Form::date('pedido_encaminhado_data', null, ['class' => 'form-control','id'=>'pedido_encaminhado_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pedido_encaminhado_data').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Pedido Encaminhado Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_encaminhado_observacao', __('models/pedidos.fields.pedido_encaminhado_observacao').':') !!}
    {!! Form::text('pedido_encaminhado_observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Pedido Fechado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_fechado', __('models/pedidos.fields.pedido_fechado').':') !!}
    {!! Form::number('pedido_fechado', null, ['class' => 'form-control']) !!}
</div>


<!-- Pedido Fechado Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_fechado_data', __('models/pedidos.fields.pedido_fechado_data').':') !!}
    {!! Form::date('pedido_fechado_data', null, ['class' => 'form-control','id'=>'pedido_fechado_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pedido_fechado_data').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Pedido Fechado Observacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_fechado_observacao', __('models/pedidos.fields.pedido_fechado_observacao').':') !!}
    {!! Form::text('pedido_fechado_observacao', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/pedidos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/pedidos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
