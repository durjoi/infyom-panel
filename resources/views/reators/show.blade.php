@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/reators.singular')
        </h1>
        {{ Breadcrumbs::render('reators.show', $reator) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('reators.show_fields')
                    <a href="{{ route('reators.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
