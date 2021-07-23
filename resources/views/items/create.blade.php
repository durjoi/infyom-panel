@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar Item
        </h1>
        {{ Breadcrumbs::render('items.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'items.store']) !!}

                        @include('items.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
