@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/faturaEventos.singular')
        </h1>
        {{ Breadcrumbs::render('faturaEventos.edit', $faturaEventos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faturaEventos, ['route' => ['faturaEventos.update', $faturaEventos->id], 'method' => 'patch']) !!}

                        @include('fatura_eventos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
