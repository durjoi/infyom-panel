@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/faturaManutencaoOs.singular')
        </h1>
        {{ Breadcrumbs::render('faturaManutencaoOs.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'faturaManutencaoOs.store']) !!}

                        @include('fatura_manutencao_os.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
