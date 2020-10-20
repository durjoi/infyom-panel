@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/pedidoCabecalhos.singular')
        </h1>
        {{ Breadcrumbs::render('pedidoCabecalhos.show', $pedidoCabecalho) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pedido_cabecalhos.show_fields')
                    <a href="{{ route('pedidoCabecalhos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
