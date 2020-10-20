@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/obrasEstoques.singular')
        </h1>
        {{ Breadcrumbs::render('obrasEstoques.show', $obrasEstoque) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('obras_estoques.show_fields')
                    <a href="{{ route('obrasEstoques.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
