@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ras.singular')
        </h1>
        {{ Breadcrumbs::render('ras.show', $ra) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ras.show_fields')
                    <a href="{{ route('ras.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
