@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/ordemDeServicoManutencaos.singular')
        </h1>
        {{ Breadcrumbs::render('ordemDeServicoManutencaos.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ordemDeServicoManutencaos.store']) !!}

                        @include('ordem_de_servico_manutencaos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
