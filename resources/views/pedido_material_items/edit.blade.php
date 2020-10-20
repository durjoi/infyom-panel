@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/pedidoMaterialItems.singular')
        </h1>
        {{ Breadcrumbs::render('pedidoMaterialItems.edit', $pedidoMaterialItem) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pedidoMaterialItem, ['route' => ['pedidoMaterialItems.update', $pedidoMaterialItem->id], 'method' => 'patch']) !!}

                        @include('pedido_material_items.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
