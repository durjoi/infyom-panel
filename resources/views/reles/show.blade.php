@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/reles.singular')
        </h1>
        {{ Breadcrumbs::render('reles.show', $rele) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('reles.show_fields')
                    <a href="{{ route('reles.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
