@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/fabricantes.singular')
        </h1>
        {{ Breadcrumbs::render('fabricantes.show', $fabricante) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('fabricantes.show_fields')
                    <a href="{{ route('fabricantes.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
