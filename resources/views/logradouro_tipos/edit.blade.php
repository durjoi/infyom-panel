@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/logradouroTipos.singular')
        </h1>
        {{ Breadcrumbs::render('logradouroTipos.edit', $logradouroTipo) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($logradouroTipo, ['route' => ['logradouroTipos.update', $logradouroTipo->id], 'method' => 'patch']) !!}

                        @include('logradouro_tipos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
