@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/tarifas.singular')
        </h1>
        {{ Breadcrumbs::render('tarifas.edit', $tarifa) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tarifa, ['route' => ['tarifas.update', $tarifa->id], 'method' => 'patch']) !!}

                        @include('tarifas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
