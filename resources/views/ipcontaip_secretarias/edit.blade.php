@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/ipcontaipSecretarias.singular')
        </h1>
        {{ Breadcrumbs::render('ipcontaipSecretarias.edit', $ipcontaipSecretarias) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ipcontaipSecretarias, ['route' => ['ipcontaipSecretarias.update', $ipcontaipSecretarias->id], 'method' => 'patch']) !!}

                        @include('ipcontaip_secretarias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
