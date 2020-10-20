@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/tipoacaos.singular')
        </h1>
        {{ Breadcrumbs::render('tipoacaos.edit', $tipoacao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoacao, ['route' => ['tipoacaos.update', $tipoacao->id], 'method' => 'patch']) !!}

                        @include('tipoacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
