@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ipcontaip14Dadosfaturas.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip14Dadosfaturas.show', $ipcontaip14Dadosfatura) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ipcontaip_14_dadosfaturas.show_fields')
                    <a href="{{ route('ipcontaip14Dadosfaturas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
