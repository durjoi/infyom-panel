@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/reles.singular')
        </h1>
        {{ Breadcrumbs::render('reles.edit', $rele) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rele, ['route' => ['reles.update', $rele->id], 'method' => 'patch']) !!}

                        @include('reles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
