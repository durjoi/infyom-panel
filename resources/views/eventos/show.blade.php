@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/eventos.singular')
        </h1>
        {{ Breadcrumbs::render('eventos.show', $eventos) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('eventos.show_fields')
                    <a href="{{ route('eventos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
