@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaipEstimadas.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaipEstimadas.edit', $ipcontaipEstimada) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaipEstimada, ['route' => ['ipcontaipEstimadas.update', $ipcontaipEstimada->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_estimadas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
