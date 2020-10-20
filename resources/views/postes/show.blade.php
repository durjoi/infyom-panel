@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/postes.singular')
        </h1>
        {{ Breadcrumbs::render('postes.show', $poste) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('postes.show_fields')
                    <a href="{{ route('postes.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
