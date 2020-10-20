@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/solicitacaoReclamacaoSolicitantes.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoReclamacaoSolicitantes.show', $solicitacaoReclamacaoSolicitantes) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('solicitacao_reclamacao_solicitantes.show_fields')
                    <a href="{{ route('solicitacaoReclamacaoSolicitantes.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
