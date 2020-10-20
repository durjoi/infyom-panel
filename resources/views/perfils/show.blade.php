@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/perfils.singular')
        </h1>
        {{ Breadcrumbs::render('perfils.show', $perfil) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('perfils.show_fields')
                    <a href="{{ route('perfils.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
