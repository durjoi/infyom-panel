@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/pedidos.singular')
        </h1>
        {{ Breadcrumbs::render('pedidos.show', $pedido) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pedidos.show_fields')
                    <a href="{{ route('pedidos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
