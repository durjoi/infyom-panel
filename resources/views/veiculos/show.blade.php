@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/veiculos.singular')
        </h1>
        {{ Breadcrumbs::render('veiculos.show', $veiculos) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('veiculos.show_fields')
                    <a href="{{ route('veiculos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
