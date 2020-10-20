@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/contratoItensAjustes.singular')
        </h1>
        {{ Breadcrumbs::render('contratoItensAjustes.show', $contratoItensAjuste) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('contrato_itens_ajustes.show_fields')
                    <a href="{{ route('contratoItensAjustes.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
