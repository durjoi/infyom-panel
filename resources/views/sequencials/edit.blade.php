@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/sequencials.singular')
        </h1>
        {{ Breadcrumbs::render('sequencials.edit', $sequencial) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sequencial, ['route' => ['sequencials.update', $sequencial->id], 'method' => 'patch']) !!}

                        @include('sequencials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
