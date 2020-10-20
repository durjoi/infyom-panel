@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/obrasBaixaIpAnteriors.singular')
        </h1>
        {{ Breadcrumbs::render('obrasBaixaIpAnteriors.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'obrasBaixaIpAnteriors.store']) !!}

                        @include('obras_baixa_ip_anteriors.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
