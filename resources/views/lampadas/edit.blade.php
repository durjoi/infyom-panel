@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/lampadas.singular')
        </h1>
        {{ Breadcrumbs::render('lampadas.edit', $lampada) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($lampada, ['route' => ['lampadas.update', $lampada->id], 'method' => 'patch']) !!}

                        @include('lampadas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
