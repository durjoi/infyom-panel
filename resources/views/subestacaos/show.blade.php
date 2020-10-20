@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/subestacaos.singular')
        </h1>
        {{ Breadcrumbs::render('subestacaos.show', $subestacao) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('subestacaos.show_fields')
                    <a href="{{ route('subestacaos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
