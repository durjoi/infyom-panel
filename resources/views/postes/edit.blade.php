@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/postes.singular')
        </h1>
        {{ Breadcrumbs::render('postes.edit', $poste) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($poste, ['route' => ['postes.update', $poste->id], 'method' => 'patch']) !!}

                        @include('postes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
