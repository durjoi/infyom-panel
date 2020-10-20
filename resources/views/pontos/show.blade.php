@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/pontos.singular')
        </h1>
        {{ Breadcrumbs::render('pontos.show', $pontos) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('pontos.show_fields')
                    <a href="{{ route('pontos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
