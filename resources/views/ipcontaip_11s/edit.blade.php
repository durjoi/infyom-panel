@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaip11s.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip11s.edit', $ipcontaip11) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaip11, ['route' => ['ipcontaip11s.update', $ipcontaip11->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_11s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
