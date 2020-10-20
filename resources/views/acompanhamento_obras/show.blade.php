@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/acompanhamentoObras.singular')
        </h1>
        {{ Breadcrumbs::render('acompanhamentoObras.show', $acompanhamentoObras) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('acompanhamento_obras.show_fields')
                    <a href="{{ route('acompanhamentoObras.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
