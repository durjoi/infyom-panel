@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/clientes.singular')
        </h1>
        {{ Breadcrumbs::render('clientes.edit', $clientes) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clientes, ['route' => ['clientes.update', $clientes->id], 'method' => 'patch']) !!}

                        @include('clientes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
