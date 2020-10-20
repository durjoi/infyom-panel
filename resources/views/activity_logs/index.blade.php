@extends('layouts.app')

@section('content')
    <section class="content-header">
        {{ Breadcrumbs::render('activityLogs.index') }}
        <br>
        <br>
        <h1 class="pull-left">
            Log de atividades
        </h1>
    </section>
    <br>
    <br>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de log de atividades</h3>
            </div>
            <div class="box-body">
                    @include('activity_logs.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

