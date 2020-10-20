@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaip14Dadosfaturas.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip14Dadosfaturas.edit', $ipcontaip14Dadosfatura) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaip14Dadosfatura, ['route' => ['ipcontaip14Dadosfaturas.update', $ipcontaip14Dadosfatura->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_14_dadosfaturas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
