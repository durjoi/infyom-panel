@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/logradouroTipos.singular')
        </h1>
        {{ Breadcrumbs::render('logradouroTipos.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'logradouroTipos.store']) !!}

                        @include('logradouro_tipos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
