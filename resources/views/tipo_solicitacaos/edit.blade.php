@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/tipoSolicitacaos.singular')
        </h1>
        {{ Breadcrumbs::render('tipoSolicitacaos.edit', $tipoSolicitacao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoSolicitacao, ['route' => ['tipoSolicitacaos.update', $tipoSolicitacao->id], 'method' => 'patch']) !!}

                        @include('tipo_solicitacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
