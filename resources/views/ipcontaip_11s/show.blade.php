@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/ipcontaip11s.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip11s.show', $ipcontaip11) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ipcontaip_11s.show_fields')
                    <a href="{{ route('ipcontaip11s.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
