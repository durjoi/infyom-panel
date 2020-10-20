@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/solicitacaoReclamacaos.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoReclamacaos.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'solicitacaoReclamacaos.store']) !!}

                        @include('solicitacao_reclamacaos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
