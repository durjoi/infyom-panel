@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/obrasSolicitantes.singular')
        </h1>
        {{ Breadcrumbs::render('obrasSolicitantes.edit', $obrasSolicitante) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($obrasSolicitante, ['route' => ['obrasSolicitantes.update', $obrasSolicitante->id], 'method' => 'patch']) !!}

                        @include('obras_solicitantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
