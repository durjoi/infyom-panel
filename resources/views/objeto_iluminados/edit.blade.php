@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/objetoIluminados.singular')
        </h1>
        {{ Breadcrumbs::render('objetoIluminados.edit', $objetoIluminado) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($objetoIluminado, ['route' => ['objetoIluminados.update', $objetoIluminado->id], 'method' => 'patch']) !!}

                        @include('objeto_iluminados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
