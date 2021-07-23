@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ordemDeServicoManutencaos.singular')
        </h1>
        {{ Breadcrumbs::render('ordemDeServicoManutencaos.show', $ordemDeServicoManutencao) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ordem_de_servico_manutencaos.show_fields')
                    <a href="{{ route('ordemDeServicoManutencaos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
