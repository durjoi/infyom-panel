@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/estoqueEpiEpcFerramentals.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueEpiEpcFerramentals.show', $estoqueEpiEpcFerramental) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('estoque_epi_epc_ferramentals.show_fields')
                    <a href="{{ route('estoqueEpiEpcFerramentals.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
