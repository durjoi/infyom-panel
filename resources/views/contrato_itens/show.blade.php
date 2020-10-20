@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/contratoItens.singular')
        </h1>
        {{ Breadcrumbs::render('contratoItens.show', $contratoItens) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('contrato_itens.show_fields')
                    <a href="{{ route('contratoItens.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
