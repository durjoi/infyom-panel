@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/solicitacaoReclamacaoSolicitantes.singular')
        </h1>
        {{ Breadcrumbs::render('solicitacaoReclamacaoSolicitantes.edit', $solicitacaoReclamacaoSolicitantes) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($solicitacaoReclamacaoSolicitantes, ['route' => ['solicitacaoReclamacaoSolicitantes.update', $solicitacaoReclamacaoSolicitantes->id], 'method' => 'patch']) !!}

                        @include('solicitacao_reclamacao_solicitantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
