@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/estoqueEpiEpcFerramentals.singular')
        </h1>
        {{ Breadcrumbs::render('estoqueEpiEpcFerramentals.edit', $estoqueEpiEpcFerramental) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estoqueEpiEpcFerramental, ['route' => ['estoqueEpiEpcFerramentals.update', $estoqueEpiEpcFerramental->id], 'method' => 'patch']) !!}

                        @include('estoque_epi_epc_ferramentals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
