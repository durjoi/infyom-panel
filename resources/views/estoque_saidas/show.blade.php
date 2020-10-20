@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/estoqueSaidas.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueSaidas.show', $estoqueSaida) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('estoque_saidas.show_fields')
                    <a href="{{ route('estoqueSaidas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
