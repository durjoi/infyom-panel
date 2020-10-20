@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/cidades.singular')
        </h1>
        {{ Breadcrumbs::render('cidades.edit', $cidade) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cidade, ['route' => ['cidades.update', $cidade->id], 'method' => 'patch']) !!}

                        @include('cidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
