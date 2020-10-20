@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/solicitacaoReclamacaoSolicitantes.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoReclamacaoSolicitantes.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'solicitacaoReclamacaoSolicitantes.store']) !!}

                        @include('solicitacao_reclamacao_solicitantes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
