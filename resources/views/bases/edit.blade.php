@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/bases.singular')
        </h1>
        {{ Breadcrumbs::render('bases.edit', $bases) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bases, ['route' => ['bases.update', $bases->id], 'method' => 'patch']) !!}

                        @include('bases.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
