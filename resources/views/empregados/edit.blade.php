@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/empregados.singular')
        </h1>
        {{ Breadcrumbs::render('empregados.edit', $empregados) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($empregados, ['route' => ['empregados.update', $empregados->id], 'method' => 'patch']) !!}

                        @include('empregados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
