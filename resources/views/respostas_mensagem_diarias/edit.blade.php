@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/respostasMensagemDiarias.singular')
        </h1>
        {{ Breadcrumbs::render('respostasMensagemDiarias.edit', $respostasMensagemDiaria) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($respostasMensagemDiaria, ['route' => ['respostasMensagemDiarias.update', $respostasMensagemDiaria->id], 'method' => 'patch']) !!}

                        @include('respostas_mensagem_diarias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
