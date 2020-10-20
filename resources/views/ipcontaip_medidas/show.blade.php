@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ipcontaipMedidas.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaipMedidas.show', $ipcontaipMedida) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ipcontaip_medidas.show_fields')
                    <a href="{{ route('ipcontaipMedidas.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
