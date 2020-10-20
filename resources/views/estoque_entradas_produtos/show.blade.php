@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/estoqueEntradasProdutos.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueEntradasProdutos.show', $estoqueEntradasProduto) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('estoque_entradas_produtos.show_fields')
                    <a href="{{ route('estoqueEntradasProdutos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
