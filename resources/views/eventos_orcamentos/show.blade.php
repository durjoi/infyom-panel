@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/eventosOrcamentos.singular')
        </h1>
        {{ Breadcrumbs::render('eventosOrcamentos.show', $eventosOrcamento) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('eventos_orcamentos.show_fields')
                    <a href="{{ route('eventosOrcamentos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
