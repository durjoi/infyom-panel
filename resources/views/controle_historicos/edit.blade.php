@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/controleHistoricos.singular')
        </h1>
        {{ Breadcrumbs::render('controleHistoricos.edit', $controleHistoricos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($controleHistoricos, ['route' => ['controleHistoricos.update', $controleHistoricos->id], 'method' => 'patch']) !!}

                        @include('controle_historicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
