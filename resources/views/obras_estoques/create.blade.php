@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/obrasEstoques.singular')
        </h1>
        {{ Breadcrumbs::render('obrasEstoques.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'obrasEstoques.store']) !!}

                        @include('obras_estoques.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
