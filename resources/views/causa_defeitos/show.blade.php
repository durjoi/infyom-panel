@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/causaDefeitos.singular')
        </h1>
        {{ Breadcrumbs::render('causaDefeitos.show', $causaDefeitos) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('causa_defeitos.show_fields')
                    <a href="{{ route('causaDefeitos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
