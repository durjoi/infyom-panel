@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/obras.singular')
        </h1>
        {{ Breadcrumbs::render('obras.show', $obras) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('obras.show_fields')
                    <a href="{{ route('obras.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
