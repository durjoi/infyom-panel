@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/itensOs.singular')
        </h1>
        {{ Breadcrumbs::render('itensOs.show', $itensOs) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('itens_os.show_fields')
                    <a href="{{ route('itensOs.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
