@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/eventosOrcamentos.singular')
        </h1>
        {{ Breadcrumbs::render('eventosOrcamentos.edit', $eventosOrcamento) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($eventosOrcamento, ['route' => ['eventosOrcamentos.update', $eventosOrcamento->id], 'method' => 'patch']) !!}

                        @include('eventos_orcamentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
