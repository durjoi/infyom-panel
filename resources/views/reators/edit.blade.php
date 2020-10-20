@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/reators.singular')
        </h1>
        {{ Breadcrumbs::render('reators.edit', $reator) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reator, ['route' => ['reators.update', $reator->id], 'method' => 'patch']) !!}

                        @include('reators.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
