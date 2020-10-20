@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/pedidoProdutos.singular')
        </h1>
        {{ Breadcrumbs::render('pedidoProdutos.edit', $pedidoProdutos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pedidoProdutos, ['route' => ['pedidoProdutos.update', $pedidoProdutos->id], 'method' => 'patch']) !!}

                        @include('pedido_produtos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
