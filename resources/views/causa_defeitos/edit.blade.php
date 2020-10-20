@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/causaDefeitos.singular')
        </h1>
        {{ Breadcrumbs::render('causaDefeitos.edit', $causaDefeitos) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($causaDefeitos, ['route' => ['causaDefeitos.update', $causaDefeitos->id], 'method' => 'patch']) !!}

                        @include('causa_defeitos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
