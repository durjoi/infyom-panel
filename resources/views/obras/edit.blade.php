@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/obras.singular')
        </h1>
        {{ Breadcrumbs::render('obras.edit', $obras) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($obras, ['route' => ['obras.update', $obras->id], 'method' => 'patch']) !!}

                        @include('obras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
