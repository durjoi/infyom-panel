@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/marcas.singular')
        </h1>
        {{ Breadcrumbs::render('marcas.edit', $marca) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($marca, ['route' => ['marcas.update', $marca->id], 'method' => 'patch']) !!}

                        @include('marcas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
