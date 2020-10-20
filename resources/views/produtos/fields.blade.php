<!-- Idcidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcidade', __('models/produtos.fields.idcidade').':') !!}
    {!! Form::select('idcidade', \App\Models\cidade::orderBy('descricao')->pluck('descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Produtos Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produtos_descricao', __('models/produtos.fields.produtos_descricao').':') !!}
    {!! Form::text('produtos_descricao', null, ['class' => 'form-control']) !!}
</div>


<!-- Idmarca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmarca', __('models/produtos.fields.idmarca').':') !!}
    {!! Form::select('idmarca', \App\Models\marca::orderBy('marca_descricao')->pluck('marca_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idunidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idunidade', __('models/produtos.fields.idunidade').':') !!}
    {!! Form::select('idunidade', \App\Models\unidade::orderBy('unidade_descricao')->pluck('unidade_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Quantidade Atual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_atual', __('models/produtos.fields.quantidade_atual').':') !!}
    {!! Form::number('quantidade_atual', null, ['class' => 'form-control']) !!}
</div>


<!-- Quantidade Minima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_minima', __('models/produtos.fields.quantidade_minima').':') !!}
    {!! Form::number('quantidade_minima', null, ['class' => 'form-control']) !!}
</div>


<!-- Valor Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_unitario', __('models/produtos.fields.valor_unitario').':') !!}
    {!! Form::number('valor_unitario', null, ['class' => 'form-control']) !!}
</div>


<!-- Idfornecedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfornecedor', __('models/produtos.fields.idfornecedor').':') !!}
    {!! Form::select('idfornecedor', \App\Models\fornecedor::orderBy('razao_social')->pluck('razao_social', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Idfabricante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfabricante', __('models/produtos.fields.idfabricante').':') !!}
    {!! Form::select('idfabricante', \App\Models\Fabricante::orderBy('fabricante_descricao')->pluck('fabricante_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Local Field -->
<div class="form-group col-sm-6">
    {!! Form::label('local', __('models/produtos.fields.local').':') !!}
    {!! Form::text('local', null, ['class' => 'form-control']) !!}
</div>


<!-- Idaplicacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idaplicacao', __('models/produtos.fields.idaplicacao').':') !!}
    {!! Form::select('idaplicacao', \App\Models\Aplicacaos::orderBy('aplicacao_descricao')->pluck('aplicacao_descricao', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Excluido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('excluido', __('models/produtos.fields.excluido').':') !!}
    {!! Form::text('excluido', null, ['class' => 'form-control']) !!}
</div>


<!-- Incluidoem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('incluidoem', __('models/produtos.fields.incluidoem').':') !!}
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
    {!! Form::label('idusuario', __('models/produtos.fields.idusuario').':') !!}
    {!! Form::select('idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Codigo Itens Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_itens_contrato', __('models/produtos.fields.codigo_itens_contrato').':') !!}
    {!! Form::text('codigo_itens_contrato', null, ['class' => 'form-control']) !!}
</div>


<!-- Atualizacao Manual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atualizacao_manual', __('models/produtos.fields.atualizacao_manual').':') !!}
    {!! Form::date('atualizacao_manual', null, ['class' => 'form-control','id'=>'atualizacao_manual']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#atualizacao_manual').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush


<!-- Atualizacao Manual Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atualizacao_manual_idusuario', __('models/produtos.fields.atualizacao_manual_idusuario').':') !!}
    {!! Form::select('atualizacao_manual_idusuario', \App\Models\usuario::orderBy('nome')->pluck('nome', 'id'), null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('produtos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
