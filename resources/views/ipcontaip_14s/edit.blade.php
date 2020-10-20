@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaip14s.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip14s.edit', $ipcontaip14) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaip14, ['route' => ['ipcontaip14s.update', $ipcontaip14->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_14s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
