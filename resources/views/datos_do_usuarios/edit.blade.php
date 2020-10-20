@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/datosDoUsuarios.singular')
        </h1>
        {{ Breadcrumbs::render('datosDoUsuarios.edit', $datosDoUsuario) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($datosDoUsuario, ['route' => ['datosDoUsuarios.update', $datosDoUsuario->id], 'method' => 'patch']) !!}

                        @include('datos_do_usuarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
