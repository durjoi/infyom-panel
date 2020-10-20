@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/obrasEstoques.singular')
        </h1>
        {{ Breadcrumbs::render('obrasEstoques.edit', $obrasEstoque) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($obrasEstoque, ['route' => ['obrasEstoques.update', $obrasEstoque->id], 'method' => 'patch']) !!}

                        @include('obras_estoques.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
