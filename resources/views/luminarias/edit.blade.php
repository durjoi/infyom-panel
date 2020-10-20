@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/luminarias.singular')
        </h1>
        {{ Breadcrumbs::render('luminarias.edit', $luminaria) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($luminaria, ['route' => ['luminarias.update', $luminaria->id], 'method' => 'patch']) !!}

                        @include('luminarias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
