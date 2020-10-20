@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/iluminacaoPublicas.singular')
        </h1>
        {{ Breadcrumbs::render('iluminacaoPublicas.show', $iluminacaoPublica) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('iluminacao_publicas.show_fields')
                    <a href="{{ route('iluminacaoPublicas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
