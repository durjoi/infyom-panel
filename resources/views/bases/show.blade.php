@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/bases.singular')
        </h1>
        {{ Breadcrumbs::render('bases.show', $bases) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('bases.show_fields')
                    <a href="{{ route('bases.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
