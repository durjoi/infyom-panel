@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/medidors.singular')
        </h1>
        {{ Breadcrumbs::render('medidors.show', $medidor) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('medidors.show_fields')
                    <a href="{{ route('medidors.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
