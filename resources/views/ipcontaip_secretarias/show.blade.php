@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ipcontaipSecretarias.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaipSecretarias.show', $ipcontaipSecretarias) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ipcontaip_secretarias.show_fields')
                    <a href="{{ route('ipcontaipSecretarias.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
