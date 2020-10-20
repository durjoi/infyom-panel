@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/lampadas.singular')
        </h1>
        {{ Breadcrumbs::render('lampadas.show', $lampada) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('lampadas.show_fields')
                    <a href="{{ route('lampadas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
