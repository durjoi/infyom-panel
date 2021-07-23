@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ordemDeServicos.singular')
        </h1>
        {{ Breadcrumbs::render('ordemDeServicos.show', $ordemDeServico) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ordem_de_servicos.show_fields')
                    <a href="{{ route('ordemDeServicos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
