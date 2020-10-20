@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/controleMotivos.singular')
        </h1>
        {{ Breadcrumbs::render('controleMotivos.show', $controleMotivos) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('controle_motivos.show_fields')
                    <a href="{{ route('controleMotivos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
