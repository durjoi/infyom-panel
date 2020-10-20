@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/fabricantes.singular')
        </h1>
        {{ Breadcrumbs::render('fabricantes.edit', $fabricante) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fabricante, ['route' => ['fabricantes.update', $fabricante->id], 'method' => 'patch']) !!}

                        @include('fabricantes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
