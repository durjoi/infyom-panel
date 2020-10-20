@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/contratos.singular')
        </h1>
        {{ Breadcrumbs::render('contratos.edit', $contratos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contratos, ['route' => ['contratos.update', $contratos->id], 'method' => 'patch']) !!}

                        @include('contratos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
