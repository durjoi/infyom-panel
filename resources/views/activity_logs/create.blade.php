@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar Log de atividade
        </h1>
        {{ Breadcrumbs::render('activityLogs.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'activityLogs.store']) !!}

                        @include('activity_logs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
