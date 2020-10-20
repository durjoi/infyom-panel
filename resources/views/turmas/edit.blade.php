@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/turmas.singular')
        </h1>
        {{ Breadcrumbs::render('turmas.edit', $turma) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($turma, ['route' => ['turmas.update', $turma->id], 'method' => 'patch']) !!}

                        @include('turmas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
