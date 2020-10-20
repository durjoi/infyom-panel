@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/ipcontaipSecretarias.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaipSecretarias.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ipcontaipSecretarias.store']) !!}

                        @include('ipcontaip_secretarias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
