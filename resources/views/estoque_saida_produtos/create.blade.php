@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/estoqueSaidaProdutos.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueSaidaProdutos.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'estoqueSaidaProdutos.store']) !!}

                        @include('estoque_saida_produtos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
