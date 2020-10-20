@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaip12s.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip12s.edit', $ipcontaip12) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaip12, ['route' => ['ipcontaip12s.update', $ipcontaip12->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_12s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
