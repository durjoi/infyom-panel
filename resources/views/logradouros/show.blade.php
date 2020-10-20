@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/logradouros.singular')
        </h1>
        {{ Breadcrumbs::render('logradouros.show', $logradouro) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('logradouros.show_fields')
                    <a href="{{ route('logradouros.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
