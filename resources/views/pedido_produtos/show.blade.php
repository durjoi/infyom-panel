@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/pedidoProdutos.singular')
        </h1>
        {{ Breadcrumbs::render('pedidoProdutos.show', $pedidoProdutos) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pedido_produtos.show_fields')
                    <a href="{{ route('pedidoProdutos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
