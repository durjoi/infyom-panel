@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/usuarios.singular')
        </h1>
        {{ Breadcrumbs::render('usuarios.edit', $usuario) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'patch']) !!}

                        @include('usuarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
