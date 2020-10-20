@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/faturaEventos.singular')
        </h1>
        {{ Breadcrumbs::render('faturaEventos.show', $faturaEventos) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('fatura_eventos.show_fields')
                    <a href="{{ route('faturaEventos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
