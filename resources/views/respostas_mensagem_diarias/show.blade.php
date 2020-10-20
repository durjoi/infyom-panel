@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/respostasMensagemDiarias.singular')
        </h1>
        {{ Breadcrumbs::render('respostasMensagemDiarias.show', $respostasMensagemDiaria) }}
        <br>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('respostas_mensagem_diarias.show_fields')
                    <a href="{{ route('respostasMensagemDiarias.index') }}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
