@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/redes.singular')
        </h1>
        {{ Breadcrumbs::render('redes.edit', $rede) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rede, ['route' => ['redes.update', $rede->id], 'method' => 'patch']) !!}

                        @include('redes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
