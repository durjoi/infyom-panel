@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/pedidoCabecalhos.singular')
        </h1>
        {{ Breadcrumbs::render('pedidoCabecalhos.edit', $pedidoCabecalho) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pedidoCabecalho, ['route' => ['pedidoCabecalhos.update', $pedidoCabecalho->id], 'method' => 'patch']) !!}

                        @include('pedido_cabecalhos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
