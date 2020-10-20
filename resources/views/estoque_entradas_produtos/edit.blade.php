@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/estoqueEntradasProdutos.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueEntradasProdutos.edit', $estoqueEntradasProduto) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estoqueEntradasProduto, ['route' => ['estoqueEntradasProdutos.update', $estoqueEntradasProduto->id], 'method' => 'patch']) !!}

                        @include('estoque_entradas_produtos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
