@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/subestacaos.singular')
        </h1>
        {{ Breadcrumbs::render('subestacaos.edit', $subestacao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subestacao, ['route' => ['subestacaos.update', $subestacao->id], 'method' => 'patch']) !!}

                        @include('subestacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
