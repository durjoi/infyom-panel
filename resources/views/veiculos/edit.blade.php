@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/veiculos.singular')
        </h1>
        {{ Breadcrumbs::render('veiculos.edit', $veiculos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($veiculos, ['route' => ['veiculos.update', $veiculos->id], 'method' => 'patch']) !!}

                        @include('veiculos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
