@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/respostasUsuarios.singular')
        </h1>
        {{ Breadcrumbs::render('respostasUsuarios.show', $respostasUsuarios) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('respostas_usuarios.show_fields')
                    <a href="{{ route('respostasUsuarios.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
