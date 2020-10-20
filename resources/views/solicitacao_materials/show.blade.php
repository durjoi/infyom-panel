@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/solicitacaoMaterials.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoMaterials.show', $solicitacaoMaterial) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('solicitacao_materials.show_fields')
                    <a href="{{ route('solicitacaoMaterials.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
