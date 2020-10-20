@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/tipoSolicitantes.singular')
        </h1>
        {{ Breadcrumbs::render('tipoSolicitantes.edit', $tipoSolicitante) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoSolicitante, ['route' => ['tipoSolicitantes.update', $tipoSolicitante->id], 'method' => 'patch']) !!}

                        @include('tipo_solicitantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
