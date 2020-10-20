@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/suportes.singular')
        </h1>
        {{ Breadcrumbs::render('suportes.edit', $suporte) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($suporte, ['route' => ['suportes.update', $suporte->id], 'method' => 'patch']) !!}

                        @include('suportes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
