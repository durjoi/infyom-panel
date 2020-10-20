@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/bairros.singular')
        </h1>
        {{ Breadcrumbs::render('bairros.edit', $bairros) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bairros, ['route' => ['bairros.update', $bairros->id], 'method' => 'patch']) !!}

                        @include('bairros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
