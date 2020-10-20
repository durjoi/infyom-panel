@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/solicitacaoMaterialItens.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoMaterialItens.show', $solicitacaoMaterialItens) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('solicitacao_material_itens.show_fields')
                    <a href="{{ route('solicitacaoMaterialItens.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
