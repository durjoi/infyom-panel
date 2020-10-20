@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/origemSolicitacaos.singular')
        </h1>
        {{ Breadcrumbs::render('origemSolicitacaos.edit', $origemSolicitacao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($origemSolicitacao, ['route' => ['origemSolicitacaos.update', $origemSolicitacao->id], 'method' => 'patch']) !!}

                        @include('origem_solicitacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
