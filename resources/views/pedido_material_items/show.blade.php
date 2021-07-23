@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/pedidoMaterialItems.singular')
        </h1>
        {{ Breadcrumbs::render('pedidoMaterialItems.show', $pedidoMaterialItem) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pedido_material_items.show_fields')
                    <a href="{{ route('pedidoMaterialItems.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
