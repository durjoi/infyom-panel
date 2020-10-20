@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaipMedidas.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaipMedidas.edit', $ipcontaipMedida) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaipMedida, ['route' => ['ipcontaipMedidas.update', $ipcontaipMedida->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_medidas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
