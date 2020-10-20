@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/operacaos.singular')
        </h1>
        {{ Breadcrumbs::render('operacaos.edit', $operacao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($operacao, ['route' => ['operacaos.update', $operacao->id], 'method' => 'patch']) !!}

                        @include('operacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
