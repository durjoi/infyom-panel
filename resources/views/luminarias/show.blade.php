@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/luminarias.singular')
        </h1>
        {{ Breadcrumbs::render('luminarias.show', $luminaria) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('luminarias.show_fields')
                    <a href="{{ route('luminarias.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
