@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/fornecedors.singular')
        </h1>
        {{ Breadcrumbs::render('fornecedors.edit', $fornecedor) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fornecedor, ['route' => ['fornecedors.update', $fornecedor->id], 'method' => 'patch']) !!}

                        @include('fornecedors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
