@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar @lang('models/faturaObrasOs.singular')
        </h1>
        {{ Breadcrumbs::render('faturaObrasOs.create') }}
        <br>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'faturaObrasOs.store']) !!}

                        @include('fatura_obras_os.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
