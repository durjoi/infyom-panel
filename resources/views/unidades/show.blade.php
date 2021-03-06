@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/unidades.singular')
        </h1>
        {{ Breadcrumbs::render('unidades.show', $unidade) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('unidades.show_fields')
                    <a href="{{ route('unidades.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
