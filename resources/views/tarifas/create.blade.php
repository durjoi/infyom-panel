@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/tarifas.singular')
        </h1>
        {{ Breadcrumbs::render('tarifas.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tarifas.store']) !!}

                        @include('tarifas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
