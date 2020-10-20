@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/usuarios.singular')
        </h1>
        {{ Breadcrumbs::render('usuarios.show', $usuario) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('usuarios.show_fields')
                    <a href="{{ route('usuarios.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
