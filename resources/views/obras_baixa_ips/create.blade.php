@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/obrasBaixaIps.singular')
        </h1>
        {{ Breadcrumbs::render('obrasBaixaIps.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'obrasBaixaIps.store']) !!}

                        @include('obras_baixa_ips.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
