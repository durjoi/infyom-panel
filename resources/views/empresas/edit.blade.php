@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/empresas.singular')
        </h1>
        {{ Breadcrumbs::render('empresas.edit', $empresas) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($empresas, ['route' => ['empresas.update', $empresas->id], 'method' => 'patch']) !!}

                        @include('empresas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
