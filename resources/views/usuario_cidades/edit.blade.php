@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/usuarioCidades.singular')
        </h1>
        {{ Breadcrumbs::render('usuarioCidades.edit', $usuarioCidade) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($usuarioCidade, ['route' => ['usuarioCidades.update', $usuarioCidade->id], 'method' => 'patch']) !!}

                        @include('usuario_cidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
