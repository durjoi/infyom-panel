@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/estoqueSaidaProdutos.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueSaidaProdutos.edit', $estoqueSaidaProdutos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estoqueSaidaProdutos, ['route' => ['estoqueSaidaProdutos.update', $estoqueSaidaProdutos->id], 'method' => 'patch']) !!}

                        @include('estoque_saida_produtos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
