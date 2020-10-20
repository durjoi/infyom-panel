@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/respostas.singular')
        </h1>
        {{ Breadcrumbs::render('respostas.edit', $respostas) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($respostas, ['route' => ['respostas.update', $respostas->id], 'method' => 'patch']) !!}

                        @include('respostas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
