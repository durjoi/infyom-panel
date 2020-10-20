@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/tipoSolicitacaos.singular')
        </h1>
        {{ Breadcrumbs::render('tipoSolicitacaos.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tipoSolicitacaos.store']) !!}

                        @include('tipo_solicitacaos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
