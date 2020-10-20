@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/mensagems.singular')
        </h1>
        {{ Breadcrumbs::render('mensagems.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'mensagems.store']) !!}

                        @include('mensagems.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
