@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/pontos.singular')
        </h1>
        {{ Breadcrumbs::render('pontos.edit', $pontos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pontos, ['route' => ['pontos.update', $pontos->id], 'method' => 'patch']) !!}

                        @include('pontos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
