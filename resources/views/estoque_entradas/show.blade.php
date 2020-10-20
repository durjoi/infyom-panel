@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/estoqueEntradas.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueEntradas.show', $estoqueEntradas) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('estoque_entradas.show_fields')
                    <a href="{{ route('estoqueEntradas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
