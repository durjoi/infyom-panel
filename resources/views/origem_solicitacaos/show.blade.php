@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/origemSolicitacaos.singular')
        </h1>
        {{ Breadcrumbs::render('origemSolicitacaos.show', $origemSolicitacao) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('origem_solicitacaos.show_fields')
                    <a href="{{ route('origemSolicitacaos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
