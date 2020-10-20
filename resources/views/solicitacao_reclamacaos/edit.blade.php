@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/solicitacaoReclamacaos.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoReclamacaos.edit', $solicitacaoReclamacao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($solicitacaoReclamacao, ['route' => ['solicitacaoReclamacaos.update', $solicitacaoReclamacao->id], 'method' => 'patch']) !!}

                        @include('solicitacao_reclamacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
