@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/empresas.singular')
        </h1>
        {{ Breadcrumbs::render('empresas.show', $empresas) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('empresas.show_fields')
                    <a href="{{ route('empresas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
