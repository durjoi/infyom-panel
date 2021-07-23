@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/requisicaos.singular')
        </h1>
        {{ Breadcrumbs::render('requisicaos.show', $requisicao) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('requisicaos.show_fields')
                    <a href="{{ route('requisicaos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
