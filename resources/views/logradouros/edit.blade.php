@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/logradouros.singular')
        </h1>
        {{ Breadcrumbs::render('logradouros.edit', $logradouro) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($logradouro, ['route' => ['logradouros.update', $logradouro->id], 'method' => 'patch']) !!}

                        @include('logradouros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
