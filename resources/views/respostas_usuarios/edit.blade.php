@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/respostasUsuarios.singular')
        </h1>
        {{ Breadcrumbs::render('respostasUsuarios.edit', $respostasUsuarios) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($respostasUsuarios, ['route' => ['respostasUsuarios.update', $respostasUsuarios->id], 'method' => 'patch']) !!}

                        @include('respostas_usuarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
