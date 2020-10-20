@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/defeitosEncontrados.singular')
        </h1>
        {{ Breadcrumbs::render('defeitosEncontrados.show', $defeitosEncontrados) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('defeitos_encontrados.show_fields')
                    <a href="{{ route('defeitosEncontrados.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
