@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/empregados.singular')
        </h1>
        {{ Breadcrumbs::render('empregados.show', $empregados) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('empregados.show_fields')
                    <a href="{{ route('empregados.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
