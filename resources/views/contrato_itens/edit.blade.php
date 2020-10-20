@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/contratoItens.singular')
        </h1>
        {{ Breadcrumbs::render('contratoItens.edit', $contratoItens) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($contratoItens, ['route' => ['contratoItens.update', $contratoItens->id], 'method' => 'patch']) !!}

                        @include('contrato_itens.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
