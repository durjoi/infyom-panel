@extends('layouts.app')

@section('content')
    <section class="content-header">
        {{ Breadcrumbs::render('faturaManutencaoOs.index') }}
        <br>
        <br>
        <h1 class="pull-left">
            @lang('models/faturaManutencaoOs.plural')
        </h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('faturaManutencaoOs.create') }}">@lang('crud.add_new')</a>
        </h1>
    </section>
    <br>
    <br>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de @lang('models/faturaManutencaoOs.plural')</h3>
            </div>
            <div class="box-body">
                    @include('fatura_manutencao_os.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

