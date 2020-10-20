@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ipcontaipEstimadas.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaipEstimadas.show', $ipcontaipEstimada) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ipcontaip_estimadas.show_fields')
                    <a href="{{ route('ipcontaipEstimadas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
