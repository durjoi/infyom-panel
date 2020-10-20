@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/requisicaos.singular')
        </h1>
        {{ Breadcrumbs::render('requisicaos.edit', $requisicao) }}
        <br>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($requisicao, ['route' => ['requisicaos.update', $requisicao->id], 'method' => 'patch']) !!}

                        @include('requisicaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
