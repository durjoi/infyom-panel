@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/mensagems.singular')
        </h1>
        {{ Breadcrumbs::render('mensagems.show', $mensagem) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('mensagems.show_fields')
                    <a href="{{ route('mensagems.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
