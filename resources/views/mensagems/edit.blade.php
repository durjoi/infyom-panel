@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/mensagems.singular')
        </h1>
        {{ Breadcrumbs::render('mensagems.edit', $mensagem) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mensagem, ['route' => ['mensagems.update', $mensagem->id], 'method' => 'patch']) !!}

                        @include('mensagems.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
