@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/faturaEventosOs.singular')
        </h1>
        {{ Breadcrumbs::render('faturaEventosOs.show', $faturaEventosOs) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('fatura_eventos_os.show_fields')
                    <a href="{{ route('faturaEventosOs.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
