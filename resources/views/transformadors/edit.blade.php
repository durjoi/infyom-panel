@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/transformadors.singular')
        </h1>
        {{ Breadcrumbs::render('transformadors.edit', $transformador) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($transformador, ['route' => ['transformadors.update', $transformador->id], 'method' => 'patch']) !!}

                        @include('transformadors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
