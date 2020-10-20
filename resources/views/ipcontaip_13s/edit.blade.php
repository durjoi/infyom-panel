@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaip13s.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaip13s.edit', $ipcontaip13) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaip13, ['route' => ['ipcontaip13s.update', $ipcontaip13->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_13s.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
