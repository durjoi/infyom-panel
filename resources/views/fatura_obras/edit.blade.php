@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/faturaObras.singular')
        </h1>
        {{ Breadcrumbs::render('faturaObras.edit', $faturaObras) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faturaObras, ['route' => ['faturaObras.update', $faturaObras->id], 'method' => 'patch']) !!}

                        @include('fatura_obras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
