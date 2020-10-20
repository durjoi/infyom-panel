@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/obrasBaixaIpAnteriors.singular')
        </h1>
        {{ Breadcrumbs::render('obrasBaixaIpAnteriors.show', $obrasBaixaIpAnterior) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('obras_baixa_ip_anteriors.show_fields')
                    <a href="{{ route('obrasBaixaIpAnteriors.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
