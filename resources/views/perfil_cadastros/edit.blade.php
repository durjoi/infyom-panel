@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar @lang('models/perfilCadastros.singular')
        </h1>
        {{ Breadcrumbs::render('perfilCadastros.edit', $perfilCadastro) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($perfilCadastro, ['route' => ['perfilCadastros.update', $perfilCadastro->id], 'method' => 'patch']) !!}

                        @include('perfil_cadastros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
