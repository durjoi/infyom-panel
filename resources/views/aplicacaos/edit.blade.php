@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/aplicacaos.singular')
        </h1>
        {{ Breadcrumbs::render('aplicacaos.edit', $aplicacaos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($aplicacaos, ['route' => ['aplicacaos.update', $aplicacaos->id], 'method' => 'patch']) !!}

                        @include('aplicacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
