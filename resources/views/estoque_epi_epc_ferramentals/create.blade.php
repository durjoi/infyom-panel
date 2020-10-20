@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/estoqueEpiEpcFerramentals.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueEpiEpcFerramentals.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'estoqueEpiEpcFerramentals.store']) !!}

                        @include('estoque_epi_epc_ferramentals.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
