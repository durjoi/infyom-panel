@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/respostasMensagemDiarias.singular')
        </h1>
        {{ Breadcrumbs::render('respostasMensagemDiarias.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'respostasMensagemDiarias.store']) !!}

                        @include('respostas_mensagem_diarias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
