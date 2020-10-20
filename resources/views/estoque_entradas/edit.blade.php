@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/estoqueEntradas.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueEntradas.edit', $estoqueEntradas) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estoqueEntradas, ['route' => ['estoqueEntradas.update', $estoqueEntradas->id], 'method' => 'patch']) !!}

                        @include('estoque_entradas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
