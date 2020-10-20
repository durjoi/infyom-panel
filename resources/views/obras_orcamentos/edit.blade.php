@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/obrasOrcamentos.singular')
        </h1>
        {{ Breadcrumbs::render('obrasOrcamentos.edit', $obrasOrcamento) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($obrasOrcamento, ['route' => ['obrasOrcamentos.update', $obrasOrcamento->id], 'method' => 'patch']) !!}

                        @include('obras_orcamentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
