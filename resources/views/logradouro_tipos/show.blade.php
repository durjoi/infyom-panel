@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/logradouroTipos.singular')
        </h1>
        {{ Breadcrumbs::render('logradouroTipos.show', $logradouroTipo) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('logradouro_tipos.show_fields')
                    <a href="{{ route('logradouroTipos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
