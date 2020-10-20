@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/faturaManutencaos.singular')
        </h1>
        {{ Breadcrumbs::render('faturaManutencaos.show', $faturaManutencao) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('fatura_manutencaos.show_fields')
                    <a href="{{ route('faturaManutencaos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
