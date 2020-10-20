@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/obrasOrcamentos.singular')
        </h1>
        {{ Breadcrumbs::render('obrasOrcamentos.show', $obrasOrcamento) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('obras_orcamentos.show_fields')
                    <a href="{{ route('obrasOrcamentos.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
