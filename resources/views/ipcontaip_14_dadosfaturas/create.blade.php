@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/ipcontaip14Dadosfaturas.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip14Dadosfaturas.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ipcontaip14Dadosfaturas.store']) !!}

                        @include('ipcontaip_14_dadosfaturas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
