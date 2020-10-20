@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/tipoacaos.singular')
        </h1>
        {{ Breadcrumbs::render('tipoacaos.show', $tipoacao) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipoacaos.show_fields')
                    <a href="{{ route('tipoacaos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
