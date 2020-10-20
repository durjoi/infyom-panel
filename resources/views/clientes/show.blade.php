@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/clientes.singular')
        </h1>
        {{ Breadcrumbs::render('clientes.show', $clientes) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('clientes.show_fields')
                    <a href="{{ route('clientes.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
