<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/pedidoProdutos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idpedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpedido', __('models/pedidoProdutos.fields.idpedido').':') !!}
    {!! Form::select('idpedido', \App\Models\pedido::orderBy('id')->pluck('id', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idprodutos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idprodutos', __('models/pedidoProdutos.fields.idprodutos').':') !!}
    {!! Form::select('idprodutos', \App\Models\produtos::orderBy('produtos_descricao')->pluck('produtos_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Qtd Solicitada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtd_solicitada', __('models/pedidoProdutos.fields.qtd_solicitada').':') !!}
    {!! Form::number('qtd_solicitada', null, ['class' => 'form-control']) !!}
</div>


<!-- Qtd Recebida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtd_recebida', __('models/pedidoProdutos.fields.qtd_recebida').':') !!}
    {!! Form::number('qtd_recebida', null, ['class' => 'form-control']) !!}
</div>


<!-- Observacoes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observacoes', __('models/pedidoProdutos.fields.observacoes').':') !!}
    {!! Form::text('observacoes', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/pedidoProdutos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/pedidoProdutos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidoProdutos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
