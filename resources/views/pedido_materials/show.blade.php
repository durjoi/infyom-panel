@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/pedidoMaterials.singular')
        </h1>
        {{ Breadcrumbs::render('pedidoMaterials.show', $pedidoMaterial) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pedido_materials.show_fields')
                    <a href="{{ route('pedidoMaterials.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
