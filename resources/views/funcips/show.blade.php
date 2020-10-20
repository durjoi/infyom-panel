@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/funcips.singular')
        </h1>
        {{ Breadcrumbs::render('funcips.show', $funcip) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('funcips.show_fields')
                    <a href="{{ route('funcips.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
