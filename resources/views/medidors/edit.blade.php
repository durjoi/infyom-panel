@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/medidors.singular')
        </h1>
        {{ Breadcrumbs::render('medidors.edit', $medidor) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($medidor, ['route' => ['medidors.update', $medidor->id], 'method' => 'patch']) !!}

                        @include('medidors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
