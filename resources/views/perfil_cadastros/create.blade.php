@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/perfilCadastros.singular')
        </h1>
        {{ Breadcrumbs::render('perfilCadastros.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'perfilCadastros.store']) !!}

                        @include('perfil_cadastros.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
