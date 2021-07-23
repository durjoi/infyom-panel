@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/pedidoMaterials.singular')
        </h1>
        {{ Breadcrumbs::render('pedidoMaterials.edit', $pedidoMaterial) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pedidoMaterial, ['route' => ['pedidoMaterials.update', $pedidoMaterial->id], 'method' => 'patch']) !!}

                        @include('pedido_materials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
