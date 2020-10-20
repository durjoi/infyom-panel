@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/tipoSolicitacaos.singular')
        </h1>
        {{ Breadcrumbs::render('tipoSolicitacaos.show', $tipoSolicitacao) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipo_solicitacaos.show_fields')
                    <a href="{{ route('tipoSolicitacaos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
