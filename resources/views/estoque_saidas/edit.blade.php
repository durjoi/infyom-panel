@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/estoqueSaidas.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueSaidas.edit', $estoqueSaida) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estoqueSaida, ['route' => ['estoqueSaidas.update', $estoqueSaida->id], 'method' => 'patch']) !!}

                        @include('estoque_saidas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
