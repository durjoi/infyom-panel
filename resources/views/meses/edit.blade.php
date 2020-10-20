@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/meses.singular')
        </h1>
        {{ Breadcrumbs::render('meses.edit', $meses) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($meses, ['route' => ['meses.update', $meses->id], 'method' => 'patch']) !!}

                        @include('meses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
