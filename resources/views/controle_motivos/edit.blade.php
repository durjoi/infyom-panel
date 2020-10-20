@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/controleMotivos.singular')
        </h1>
        {{ Breadcrumbs::render('controleMotivos.edit', $controleMotivos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($controleMotivos, ['route' => ['controleMotivos.update', $controleMotivos->id], 'method' => 'patch']) !!}

                        @include('controle_motivos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
