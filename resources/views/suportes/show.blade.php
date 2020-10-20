@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/suportes.singular')
        </h1>
        {{ Breadcrumbs::render('suportes.show', $suporte) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('suportes.show_fields')
                    <a href="{{ route('suportes.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
