@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/datosDoUsuarios.singular')
        </h1>
        {{ Breadcrumbs::render('datosDoUsuarios.show', $datosDoUsuario) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('datos_do_usuarios.show_fields')
                    <a href="{{ route('datosDoUsuarios.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
