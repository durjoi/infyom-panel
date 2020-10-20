@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/faturaManutencaoOs.singular')
        </h1>
        {{ Breadcrumbs::render('faturaManutencaoOs.show', $faturaManutencaoOs) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('fatura_manutencao_os.show_fields')
                    <a href="{{ route('faturaManutencaoOs.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
