@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/unidades.singular')
        </h1>
        {{ Breadcrumbs::render('unidades.edit', $unidade) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($unidade, ['route' => ['unidades.update', $unidade->id], 'method' => 'patch']) !!}

                        @include('unidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
