@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ras.singular')
        </h1>
        {{ Breadcrumbs::render('ras.edit', $ra) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ra, ['route' => ['ras.update', $ra->id], 'method' => 'patch']) !!}

                        @include('ras.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
