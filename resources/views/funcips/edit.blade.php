@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/funcips.singular')
        </h1>
        {{ Breadcrumbs::render('funcips.edit', $funcip) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($funcip, ['route' => ['funcips.update', $funcip->id], 'method' => 'patch']) !!}

                        @include('funcips.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
