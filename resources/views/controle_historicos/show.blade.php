@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/controleHistoricos.singular')
        </h1>
        {{ Breadcrumbs::render('controleHistoricos.show', $controleHistoricos) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('controle_historicos.show_fields')
                    <a href="{{ route('controleHistoricos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
