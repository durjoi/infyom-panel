@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/tipoSolicitantes.singular')
        </h1>
        {{ Breadcrumbs::render('tipoSolicitantes.show', $tipoSolicitante) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipo_solicitantes.show_fields')
                    <a href="{{ route('tipoSolicitantes.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
