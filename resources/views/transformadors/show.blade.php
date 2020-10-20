@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/transformadors.singular')
        </h1>
        {{ Breadcrumbs::render('transformadors.show', $transformador) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('transformadors.show_fields')
                    <a href="{{ route('transformadors.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
