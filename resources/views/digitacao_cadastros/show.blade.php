@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/digitacaoCadastros.singular')
        </h1>
        {{ Breadcrumbs::render('digitacaoCadastros.show', $digitacaoCadastros) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('digitacao_cadastros.show_fields')
                    <a href="{{ route('digitacaoCadastros.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
