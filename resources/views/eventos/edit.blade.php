@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/eventos.singular')
        </h1>
        {{ Breadcrumbs::render('eventos.edit', $eventos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($eventos, ['route' => ['eventos.update', $eventos->id], 'method' => 'patch']) !!}

                        @include('eventos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
