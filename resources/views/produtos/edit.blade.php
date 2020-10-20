@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/produtos.singular')
        </h1>
        {{ Breadcrumbs::render('produtos.edit', $produtos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($produtos, ['route' => ['produtos.update', $produtos->id], 'method' => 'patch']) !!}

                        @include('produtos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
