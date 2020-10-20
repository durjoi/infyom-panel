@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaip10s.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip10s.edit', $ipcontaip10) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaip10, ['route' => ['ipcontaip10s.update', $ipcontaip10->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_10s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
