@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/turmas.singular')
        </h1>
        {{ Breadcrumbs::render('turmas.show', $turma) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('turmas.show_fields')
                    <a href="{{ route('turmas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
